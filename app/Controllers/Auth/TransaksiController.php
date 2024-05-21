<?php
namespace App\Controllers\Auth;

use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use App\Models\Transaksi;
use App\Models\TSalesDet;
use App\Models\Customer;
use App\Models\Barang;

class TransaksiController extends Controller
{
    protected $session;

    public function __construct()
    {
        // Load the session service
        $this->session = \Config\Services::session();
    }
    public function transaksi()
    {
        // Check if the user is signed-in, if not redirect to the login page
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('login');
        }
    
        // Load Transaksi model
        $transaksiModel = new Transaksi();
    
        // Get all transactions with related data using joins
        $alltrans = $transaksiModel
            ->select(['t_sales.id', 't_sales.kode', 't_sales.tgl', 'm_customer.nama as nama', 't_sales_detail.qty', 't_sales.subtotal', 't_sales.diskon', 't_sales.ongkir', 't_sales.total_bayar'], false)

            ->join('m_customer', 'm_customer.id = t_sales.id_cust')
            ->join('t_sales_detail', 't_sales_detail.id_sales = t_sales.id')
            ->join('m_barang', 'm_barang.id = t_sales_detail.id_barang')
            ->findAll();
    
        // Load the view with session data
        return view('admin/indexTransaksi', [
            'userData' => $this->session->get('userData'),
            'data' => $alltrans
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

    public function create()
    {
   
        // Load Barang model
        $transaksi = new Transaksi();
        $trans = $transaksi->findAll();
        $customer = new Customer();
        $cust = $customer->findAll();
        $barang = new Barang();
        $goodies = $barang->findAll();
       
        // Load the view with session data
        return view('modals/add-transaksi', [
            'userData' => $this->session->get('userData'),
            'transaksi' => $trans,
            'customer' => $cust,
            'barang'=> $goodies,

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
			'tgl_lahir'	=> 'required',
            'telepon'=> 'required'        
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
        $request = Services::request();

        $transaksiModel = new Transaksi();
        $salesDetModel = new TSalesDet();

        // Dapatkan transaksi terakhir
        $lastTransaction = $transaksiModel->orderBy('id', 'desc')->first();
        $lastCode = $lastTransaction ? $lastTransaction['kode'] : null;

        // Dapatkan tahun dan bulan saat ini
        $currentDate = date('Ym');
        
        // Tentukan nomor urutan berikutnya
        $codeNumber = $lastCode ? intval(substr($lastCode, -4)) + 1 : 1;

        // Format nomor urutan dengan panjang 4 digit dan tambahkan ke kode transaksi
        $codeNumberFormatted = str_pad($codeNumber, 4, '0', STR_PAD_LEFT);
        $kodeTransaksi = $currentDate . '-' . $codeNumberFormatted;

        // Simpan data penjualan
        $salesData = [
            'id_cust' => $request->getPost('id_cust'),
            'tgl' => $request->getPost('tgl'),
            'kode' => $kodeTransaksi,
            'subtotal' => $request->getPost('subtotal'),
            'diskon' => $request->getPost('diskon'),
            'ongkir' => $request->getPost('ongkir'),
            'total_bayar' => $request->getPost('total_bayar'),
        ];
        $transaksiModel->insert($salesData);
        $salesId = $transaksiModel->insertID();

        // Simpan detail penjualan
        $id_barang = $request->getPost('id_barang');
        $kode = $request->getPost('kode');
        $qty = $request->getPost('qty');
        $harga_bandrol = $request->getPost('harga_bandrol');
        $diskon_pct = $request->getPost('diskon_pct');
        $diskon_nilai = $request->getPost('diskon_nilai');
        $harga_diskon = $request->getPost('harga_diskon');
        $total = $request->getPost('total');

        foreach ($kode as $key => $value) {
            $detailData = [
                'id_sales' => $salesId,
                'id_barang' => $id_barang[$key],
                'qty' => $qty[$key],
                'harga_bandrol' => $harga_bandrol[$key],
                'diskon_pct' => $diskon_pct[$key],
                'diskon_nilai' => $diskon_nilai[$key],
                'harga_diskon' => $harga_diskon[$key],
                'total' => $total[$key],
            ];
            $salesDetModel->insert($detailData);
        }

        return redirect()->back()->with('success', 'Data penjualan berhasil disimpan.');
    }
}
?>