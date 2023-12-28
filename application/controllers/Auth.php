<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
    }


	public function index()
	{
    if (@$_SESSION['loggedIn']=='in'){
      redirect('users');
    }else{
        $this->load->library('form_validation');
        $this->load->view('login/user_login');
    }
	}
    public function authUser(){
        if (isset($_POST['login'])){
            $username=$_POST['username'];
            $pass=$_POST['password'];
            $pass=md5($pass);
           $sql="select * from users where username='$username' and password='$pass'";
            $user=$this->main_model->select_query($sql);

            if ($user){
                $data=array(
                    'loggedIn'=>'in'
                );
                $this->session->set_userdata($data);
                redirect('users');
            }
        }
    }
}
