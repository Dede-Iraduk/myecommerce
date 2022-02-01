<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view("index");
    }
    public function GL_landingpage()
    {
        echo view("GL_landingpage");
    }


    public function add_category()
    {
        echo view("Templates/mainheader");
        echo view("add_category");
        echo view("Templates/mainfooter");
    }




    public function add_subcategory()
    {
        echo view("Templates/mainheader");
        echo view("add_subcategory");
        echo view("Templates/mainfooter");
    }



    public function confirm()
    {
        echo view("Templates/mainheader");
        echo view("confirmation");
        echo view("Templates/mainfooter");
    }



    public function product()
    {
        echo view("Templates/mainheader");
        echo view("add_product");
        echo view("Templates/mainfooter");
    }




      public function add_user()
    {
        echo view("Templates/mainheader");
        echo view("add_user");
        echo view("Templates/mainfooter");
    }



     public function view_products()
  {
       echo view("Templates/mainheader");
       echo view("view_subcategories");
       echo view("Templates/mainfooter");
   }





  public function signin()
    {
        echo view("signin");
    }




      public function signup()
    {
        echo view("signup");
    }



 public function profile()
    {


        $session = session();
        echo view('Homepage/header');
        echo "Hello : ".$session->get('firstname');
        echo view('Homepage/footer');
        
    }



         public function admin_dashboard()
    {
        echo view("admin_dashboard");
    }

}
