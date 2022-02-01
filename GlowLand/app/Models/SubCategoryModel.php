<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class SubCategoryModel extends Model{

  protected $table = 'subcategories';

    protected $primaryKey = 'subcategory_id';

    protected $allowedFields = [
        'subcategory_name',
        'category',
        'is_deleted'
        
    ];


}