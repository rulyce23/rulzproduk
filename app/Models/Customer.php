<?php 
namespace App\Models;

use CodeIgniter\Model;

class Customer extends Model
{

protected $table = 'm_customer';

    	// this happens first, model removes all other fields from input data
	protected $allowedFields = [
		'kode', 'nama', 'telepon','jk','nik','alamat','goldar','tgl_lahir' 
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'customers' => [
			'kode'	=> 'required',
			'nama'	=> 'required',
			'jk'	=> 'required',
			'nik'	=> 'required',
			'tgl_lahir'	=> 'required',
            'telepon' => 'required'
		]
	];

	protected $validationMessages = [];

	protected $skipValidation = false;
	
    public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

    public function sales()
    {
        return $this->hasMany(Transaksi::class, 'id_cust');
    }
}
