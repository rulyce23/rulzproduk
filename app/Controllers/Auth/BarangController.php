<?php
namespace App\Controllers\Auth;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\Barang;

class BarangController extends Controller
{
    protected $session;

    public function __construct()
    {
        // Load the session service
        $this->session = \Config\Services::session();
    }

 public function barang()
    {
        // Check if the user is signed-in, if not redirect to the login page
        if (! $this->session->get('isLoggedIn')) {
            return redirect()->to('login');
        }

        // Current year and month variable
        $ym = date("Y-m");

        // Load Barang model
        $barang = new Barang();

        // Get all barangs
        $allbarang = $barang->findAll();

        // Count all rows in the barang table
        $countbarang = $barang->countAll();

        // Count all new barangs in the last 30 days
        $newbarang = $barang->like("created_at", $ym)->countAllResults();

        // Load the view with session data
        return view('admin/indexBarang', [
            'userData' => $this->session->get('userData'),
            'data' => $allbarang,
            'countbarang' => $countbarang,
            'newbarang' => $newbarang,
        ]);
    }

    public function edit()
    {
        // Get the user id from the URI segment
        $id = $this->request->getUri()->getSegment(3);

        // Load Barang model
        $barangs = new Barang();

        // Get user data using the id
        $barang = $barangs->find($id);

        // Check if barang is found
        if (!$barang) {
            // Handle the case where the barang is not found, e.g., redirect or show an error message
            return redirect()->to('/some-error-page')->with('error', 'Barang not found');
        }

        // Load the view with session data
        return view('edits/edit-barang', [
            'userData' => $this->session->get('userData'),
            'barang' => $barang,
        ]);
    }

	public function update()
	{
		$rules = [
			'id'	=> 'required|is_natural',
			'kode'	=> 'required',
			'nama'	=> 'required',
			'harga'	=> 'required',
			'jenis'	=> 'required',
		];

		if (! $this->validate($rules)) {
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		}

		$barang = new Barang();

		$barangs = [
			'id'  	=> $this->request->getPost('id'),
			'kode' 	=> $this->request->getPost('kode'),
			'nama' 	=> $this->request->getPost('nama'),
			'harga' 	=> $this->request->getPost('harga'),
			'jenis' 	=> $this->request->getPost('jenis'),
		
		];

		if (! $barangs->save($barang)) {
			return redirect()->back()->withInput()->with('errors', $barangs->errors());
        }

        return redirect()->back()->with('success', 'Data Berhasil Di Ubah');
	}

	public function delete()
	{
		// get the user id
		$id = $this->request->uri->getSegment(3);

		// load user model
		$barangs = new Barang();

		// delete user using the id
		$barangs->delete($id);

        return redirect()->back()->with('success','Data Berhasil Dihapus');
	}

	public function store()
	{
		helper('text');

		// save new user, validation happens in the model
		$barangs = new Barang();
		$getRule = $barangs->getRule('barangs');
		$barangs->setValidationRules($getRule);
		
        $barang = [
			'kode' 	=> $this->request->getPost('kode'),
			'nama' 	=> $this->request->getPost('nama'),
			'harga' 	=> $this->request->getPost('harga'),
			'jenis' 	=> $this->request->getPost('jenis'),
        ];

        if (! $barangs->save($barang)) {
			return redirect()->back()->withInput()->with('errors', $barangs->errors());
        }
		// success
        return redirect()->back()->with('success', 'Success! Data Berhasil Dibuat');
	}
}
?>