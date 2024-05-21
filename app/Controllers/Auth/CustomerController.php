<?php
namespace App\Controllers\Auth;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\Customer;

class CustomerController extends Controller
{
    protected $session;

    public function __construct()
    {
        // Load the session service
        $this->session = \Config\Services::session();
    }
public function customer()
	{
		// check if user is signed-in if not redirect to login page
		if (!$this->session->isLoggedIn) {
			return redirect()->to('login');
		}

		// current year and month variable 
		$ym = date("Y-m");

		// load user model
		$customer = new Customer();

		// getall users
		$allcust = $customer->findAll(); 

		// count all rows in users table
		$countcust = $customer->countAll(); 

		// count all active user in the last 30 days
		$newcust = $customer->like("created_at", $ym)->countAllResults(); 
	
		// load the view with session data
		return view('admin/indexCustomer', [
				// 'userData' => $this->session->userData, 
				'data' => $allcust, 
				'countcust' => $countcust, 
				'newcust' => $newcust,
			]);
	}



    public function edit()
    {
        // Get the user id from the URI segment
        $id = $this->request->getUri()->getSegment(3);

        // Load Barang model
        $customers = new Customer();

        // Get user data using the id
        $cust = $customers->find($id);

        // Check if barang is found
        if (!$cust) {
            // Handle the case where the barang is not found, e.g., redirect or show an error message
            return redirect()->to('/some-error-page')->with('error', 'Barang not found');
        }

        // Load the view with session data
        return view('edits/edit-customer', [
            'userData' => $this->session->get('userData'),
            'customer' => $cust,
        ]);
    }
	public function update()
	{
		$rules = [
			'id'	=> 'required|is_natural',
			'kode'	=> 'required',
			'nama'	=> 'required',
			'jk'	=> 'required',
			'nik'	=> 'required',
            'telepon'=> 'required' ,
            'tgl_lahir'	=> 'required'      
		];

		if (! $this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$cust = new Customer();

		$custr = [
			'id'  	=> $this->request->getPost('id'),
			'kode' 	=> $this->request->getPost('kode'),
			'nama' 	=> $this->request->getPost('nama'),
			'jk' 	=> $this->request->getPost('jk'),
			'nik' 	=> $this->request->getPost('nik'),
			'telepon' 	=> $this->request->getPost('telepon'),
            'alamat' 	=> $this->request->getPost('alamat'),
            'goldar'	=> $this->request->getPost('goldar'),
            'tgl_lahir'	=> $this->request->getPost('tgl_lahir'),
		];

		if (! $custr->save($cust)) {
			return redirect()->back()->withInput()->with('errors', $custr->errors());
        }

        return redirect()->back()->with('success', 'Data Berhasil Di Ubah');
	}

	public function delete()
	{
		// get the user id
		$id = $this->request->uri->getSegment(3);

		// load user model
		$customers = new Customer();

		// delete user using the id
		$customers->delete($id);

        return redirect()->back()->with('success','Data Berhasil Dihapus');
	}

	public function store()
	{
		helper('text');

		// save new user, validation happens in the model
		$custs = new Customer();
		$getRule = $custs->getRule('customers');
		$custs->setValidationRules($getRule);
		
        $cust = [
			'kode' 	=> $this->request->getPost('kode'),
			'nama' 	=> $this->request->getPost('nama'),
			'jk' 	=> $this->request->getPost('jk'),
			'nik' 	=> $this->request->getPost('nik'),
			'telepon' 	=> $this->request->getPost('telepon'),
            'alamat' 	=> $this->request->getPost('alamat'),
            'goldar'	=> $this->request->getPost('goldar'),
            'tgl_lahir'	=> $this->request->getPost('tgl_lahir'),
            
        ];

        if (! $custs->save($cust)) {
			return redirect()->back()->withInput()->with('errors', $custs->errors());
        }
		// success
        return redirect()->back()->with('success', 'Success! Data Berhasil Dibuat');
	}
}
?>