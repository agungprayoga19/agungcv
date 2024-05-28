<?php 
namespace App\Models;

use CodeIgniter\Model;

class AgungModel extends Model
{
    protected $table = 'isi_agung';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'ttl', 'alamat', 'email', 'nope'];
}