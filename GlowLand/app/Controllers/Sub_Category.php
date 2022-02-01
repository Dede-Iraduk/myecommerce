<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\SubCategoryModel;
  
class Sub_Category  extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('add_subcategory', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'subcategory_name'          => 'required|min_length[2]|max_length[50]',
            'category'          => 'required|min_length[0]|max_length[2]',
            'is_deleted'          => 'required|min_length[0]|max_length[2]'
            
        ];
          
        if($this->validate($rules)){

$subcategoryModel = new SubCategoryModel();

            $data = [
                'subcategory_name'     => $this->request->getVar('subcategory_name'),
                'category'     => $this->request->getVar('category'),
                'is_deleted'     => $this->request->getVar('is_deleted')
                
            ];

          $subcategoryModel->save($data);

            return redirect()->to('/confirm');
        }else{
            $data['validation'] = $this->validator;
            echo view('add_subcategory', $data);
        }
          
    }



       public function view_subcategory(){

                $subcategory= new SubCategoryModel();
$data['subcategories']= $subcategory->findAll();

echo view("Templates/mainheader");
return view('/view_subcategories', $data);
echo view("Templates/mainfooter");
    }

    public function edit($subcategory_id){

$subcategory=new SubCategoryModel();
$data['subcategory']     = $subcategory->find($subcategory_id);

echo view("Templates/mainheader");
return view('edit/subcategory_edit',$data);
echo view("Templates/mainfooter");
    }




    public function update($subcategory_id)
    {

$subcategory = new SubCategoryModel();

            $data = [
                 'subcategory_name'     => $this->request->getVar('subcategory_name'),
                'category'     => $this->request->getVar('category'),
                'is_deleted'     => $this->request->getVar('is_deleted')
                
            ];

          $subcategory->update($subcategory_id,$data);

            return redirect()->to('/success');
                } 


                public function delete($subcategory_id){
$subcategory=new SubCategoryModel();

$data ->find($subcategory_id);
$product->delete($subcategory_id);

return redirect()->to('/success');

    }


  
}