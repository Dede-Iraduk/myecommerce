<?php


namespace App\Controllers;
class Confirmation extends BaseController
{
 public function confirm()
    {
       echo  view("Templates/mainheader");
        echo view("confirmation");
       echo  view("Templates/mainfooter");
    }
}
?>