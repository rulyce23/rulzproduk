<?php
namespace App\Models;
use CodeIgniter\Model;

class T_Ucapan extends Model
{
 protected $table = 't_ucapankehadiran';
 protected $primaryKey = 'id'; // Jika nama kolom primary key bukan 'id', ganti dengan nama kolom yang benar
protected $allowedFields = ['nama_visitor', 'email_visitor', 'banyak_tamu', 'status_visitor', 'ucapan_visitor'];
} 
 ?>