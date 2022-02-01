<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\Product_Model;
  
class Product extends Controller
{
    public function index()
    {

    
        helper(['form']);
        $data = [];
        echo view('add_product', $data);
    }
  
    public function store()
    {
$product=new Product_Model();

$file= $this->request->getfile('product_image');



if ($file->isValid() && ! $file->hasMoved()) {

    $productimagename = $file->getRandomName();
  $file->move('Uploads/', $productimagename);

}

$data= [
'product_name' => $this->request-> getVar('product_name'),
'product_description' => $this->request-> getVar('product_description'),
'unit_price' => $this ->request-> getPost('unit_price'),
'available_quantity' => $this->request-> getPost('available_quantity'),
'subcategory_id' => $this->request-> getVar('subcategory'),
'is_deleted' => $this->request-> getVar('is_deleted'),
'added_by' =>'0',
'product_image' =>$productimagename,

];

  
  $product->save($data);

  


  return redirect()->to('/confirm')->with('status','Product Data Saved !!!!!!!');
    }




    public function product_crud(){
        $product= new Product_Model();
$data['products']= $product->findAll();

echo view("Templates/mainheader");
return view('/view_products', $data);
echo view("Templates/mainfooter");

    }






    public function edit($product_id){

$products=new Product_Model();
$data['product']     = $products->find($product_id);

echo view("Templates/mainheader");
return view('edit/productedit',$data);
echo view("Templates/mainfooter");
    }




    public function update($product_id)
    {
        $products =new Product_Model();
        $prod_item = $products->find($product_id);
$old_img_name = $prod_item['product_image'];

        $file = $this->request->getfile('product_image');
        if ($file->isValid() && !$file->hasMoved() ) {
          
            if (file_exists("Uploads/".$old_img_name)) {

            unlink("Uploads/".$old_img_name);

            }
            $imageName =$file->getRandomName();
            $file->move('Uploads/',$imageName);
        }
        else
        {
$old_img_name = $prod_item;

        }

$data= [
'product_name' => $this->request-> getVar('product_name'),
'product_description' => $this->request-> getVar('product_description'),
'unit_price' => $this ->request-> getPost('unit_price'),
'available_quantity' => $this->request-> getPost('available_quantity'),
'subcategory_id' => $this->request-> getVar('subcategory'),
'is_deleted' => $this->request-> getVar('is_deleted'),
'added_by' =>'0',
'product_image' =>$imageName

];

$products-> update($product_id, $data);
return redirect()->to('/success')->with('status','Product Data Updated !!!!!!!');
    }

public function delete($product_id){

$product = new Product_Model();

$data = $product->find($product_id);
$imagefile =$data['product_image'];

if (file_exists("Uploads/".$imagefile)) {
    unlink("Uploads/".$imagefile);
}


$product->delete($product_id);
return redirect()->back()->with('status','Product Data Deleted!!!!!!!');
    }
}






  
