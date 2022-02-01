<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SignupController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('signup', $data);
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'firstname'          => 'required|min_length[2]|max_length[50]',
            'lastname'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user_table.email]',
            'gender'          => 'required|min_length[2]|max_length[50]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'password2'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                'firstname'     => $this->request->getVar('firstname'),
                'lastname'     => $this->request->getVar('lastname'),
                'email'    => $this->request->getVar('email'),
                'gender'    => $this->request->getVar('gender'),
                'role' => '1',
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);

            return redirect()->to('/signin');
            //return redirect()->route('/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
          
    }



public function admin_store()
    {
        helper(['form']);
        $rules = [
            'firstname'          => 'required|min_length[2]|max_length[50]',
            'lastname'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user_table.email]',
            'gender'          => 'required|min_length[2]|max_length[50]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'password2'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                'firstname'     => $this->request->getVar('firstname'),
                'lastname'     => $this->request->getVar('lastname'),
                'email'    => $this->request->getVar('email'),
                'gender'    => $this->request->getVar('gender'),
                'role' => $this->request->getVar('role'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);

            return redirect()->to('/signin');
        }else{
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
          
    }





        public function user_crud(){
        $user= new UserModel();
$data['users']= $user->findAll();

echo view("Templates/mainheader");
return view('/view_users', $data);
echo view("Templates/mainfooter");

    }



public function edit($userid){

$user=new userModel();
$data['user']     = $user->find($userid);

echo view("Templates/mainheader");
return view('edit/user_edit',$data);
echo view("Templates/mainfooter");
    }




    public function update($userid)
    {

$user = new userModel();

            $data = [
                'category_name'     => $this->request->getVar('category_name'),
                'is_deleted'     => $this->request->getVar('is_deleted')
                
            ];

          $user->update($userid,$data);

            return redirect()->to('/success');
                } 


                public function delete($userid){

$user=new userModel();

$data = $category->find($userid);
$user->delete($userid);

return redirect()->to('/success');

    }
  
}