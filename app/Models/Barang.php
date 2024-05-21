<?php 
namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{

protected $table = 'm_barang';


    protected $fillable = [ 'kode', 'nama', 'harga','jenis' ];


    protected $allowedFields = [
		'kode', 'nama', 'harga','jenis' 
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'barangs' => [
			'kode'	=> 'required',
			'nama'	=> 'required',
			'harga'	=> 'required',
			'jenis'	=> 'required',
		]
	];

	protected $validationMessages = [];

	protected $skipValidation = false;
	
    public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}


    public function salesDetails()
    {
        return $this->hasMany(TSalesDet::class, 'id_barang');
    }
}
