<?php 
namespace App\Models;

use CodeIgniter\Model;

class TSalesDet extends Model
{
    protected $table = 't_sales_detail';
  	protected $primaryKey = 'id';

	protected $returnType = 'array';
	protected $useSoftDeletes = false;

    protected $allowedFields = [
		'id_barang', 'id_sales', 'harga_bandrol','diskon_pct','diskon_nilai','total','harga_diskon'
	];

	protected $useTimestamps = true;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $dateFormat  	 = 'datetime';

	protected $validationRules = [];

	// we need different rules for logs
	protected $dynamicRules = [
		'salesdetails' => [
			'id_barang'	=> 'required',
			'id_sales'	=> 'required',
			'harga_bandrol'	=> 'required',
			'diskon_pct'	=> 'required',
			'diskon_nilai'	=> 'required',
            'total'	=> 'required',
            'harga_diskon'	=> 'required',
		]
	];

	protected $validationMessages = [];

	protected $skipValidation = false;

    public function getRule(string $rule)
	{
		return $this->dynamicRules[$rule];
	}

    
    public function barang()
    {
        return $this->belongsTo(MBarang::class, 'id_barang');
    }

    public function sales()
    {
        return $this->belongsTo(Transaksi::class, 'id_sales');
    }
}
?>