<?php 
namespace App\Models;

use CodeIgniter\Model;

class Item extends Model{
    protected $table      = 'items';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields = ['name','category','cost_price','unit_price','pic_filename'];
}