<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class UserModel extends Model{

    protected $table = 'user_table';
    protected $primaryKey = 'userid';


    protected $allowedFields = [
        'firstname',
        'lastname',
        'email',
        'gender',
        'password',
        'role'
        
    ];

}