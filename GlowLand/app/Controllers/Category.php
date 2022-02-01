<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\CategoryModel;
  
class Category extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('add_category', $data);
    }




  
    public function store()
    {
        helper(['form']);
        $rules = [
            'category_name'          => 'required|min_length[2]|max_length[50]',
            'is_deleted'          => 'required|min_length[0]|max_length[2]'
            
        ];
          
        if($this->validate($rules)){

$categoryModel = new CategoryModel();

            $data = [
                'category_name'     => $this->request->getVar('category_name'),
                'is_deleted'     => $this->request->getVar('is_deleted')
                
            ];

          $categoryModel->save($data);

            return redirect()->to('/success');
        }else{
            $data['validation'] = $this->validator;
            echo view('add_category', $data);
        }
          
    }






    public function view_category(){

                $category= new CategoryModel();
$data['categories']= $category->findAll();

echo view("Templates/mainheader");
return view('/view_categories', $data);
echo view("Templates/mainfooter");
    }




      public function edit($category_id){

$category=new CategoryModel();
$data['category']     = $category->find($category_id);

echo view("Templates/mainheader");
return view('edit/category_edit',$data);
echo view("Templates/mainfooter");
    }




    public function update($category_id)
    {

$categoryModel = new CategoryModel();

            $data = [
                'category_name'     => $this->request->getVar('category_name'),
                'is_deleted'     => $this->request->getVar('is_deleted')
                
            ];

          $categoryModel->update($category_id,$data);

            return redirect()->to('/success');
                } 


                public function delete($category_id){

$category=new CategoryModel();

$data = $category->find($category_id);
$product->delete($category_id);

return redirect()->to('/success');

    }


    }
  