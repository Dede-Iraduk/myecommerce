<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;

  
class ProfileController extends Controller
{
    public function profile()
    {


        $session = session();
        //echo view('Homepage/header');
        echo view("index");
        echo "Hello : ".$session->get('firstname');
       // echo view('Homepage/footer');
        
    }




      public function Logout()
    {
        
          return redirect()->to('/success')->with('status','Session closed !!!!!!!');

    }
}