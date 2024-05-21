<?php 
namespace App\Models;

use CodeIgniter\Model;

class Transaksi extends Model
{

protected $table = 't_sales';
    	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'kode', 'tgl', 'id_cust','subtotal','diskon','ongkir','total_bayar'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'trans' => [
			'kode'	=> 'required',
			'tgl'	=> 'required',
			'id_cust'	=> 'required',
			'subtotal'	=> 'required',
			'diskon'	=> 'required',
            'ongkir'	=> 'required',
            'total_bayar'	=> 'required',
		]
	];

	protected $validationMessages = [];

	protected $skipValidation = false;
	
    public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

    public function getCustomer()
    {
        $customerModel = new Customer();
        return $customerModel->find($this->attributes['id']);
    }

    public function getSalesDetails()
    {
        $salesDetailModel = new TSalesDet();
        return $salesDetailModel->where('id_sales', $this->attributes['id'])->findAll();
    }

}
