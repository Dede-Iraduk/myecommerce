<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class Product_Model extends Model{

 protected $table = 'product';
protected $primaryKey = 'product_id';


    protected $allowedFields = [

        'product_id',
        'product_name',

        'product_description',

'product_image',

'unit_price',

'added_by',
'available_quantity',
'subcategory_id',


        'is_deleted'
    ];



}