<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
        if (@$_SESSION['loggedIn'] != 'in') {
            redirect('Auth');
        }
        $this->load->library('encryption');


    }

    public function index()
    {

        if (isset($_POST['pass'])) {
            $pass = $_POST['pass'];
            $sql = "select * from main";
            $res = $this->main_model->select_query($sql);
            foreach ($res as $dex=>$val){
                $res[$dex]['Pr_K']=$this->encryption->decrypt($val['Pr_K']);

                $s=date("y-m-d",$val['date']);
                $s= new DateTime($s);
                $n= new DateTime();
                $diff=$s->diff($n);
                $diff=$diff->days;
                $n=365-$diff;

                if ($n<=0){
                    $res[$dex]['left_days']="پایان یافت";
                }else{$res[$dex]['left_days']=$n." days";}

            }

            $this->template->load('users/showRes',array('result'=>$res));

        }else{
            $this->template->load('users/auth_key');
        }



    }

    public function addWallet()
    {

        if (isset($_POST['prk'])) {
            $prk = $_POST['prk'];


            $message = $this->encryption->encrypt(
                $prk
            );
            /*===================*/
            /*===================*/
            /*===================*/
           $data = array(
                'pr_k' => $message,
                'pb_k' => $_POST['pbk'],
                'name' => $_POST['name'],
                'amount' => $_POST['ea'],
                'amount_plus' => $_POST['aa'],
                'date' => time()
            );
             $result=$this->main_model->insert('main',$data);
            /*===================*/
            /*===================*/

             if ($result){
                 redirect('users');
             }


        }
        $this->template->load('users/add_wallet');

    }

    public function logout()
    {
        session_destroy();
        redirect('login/index');
    }

}
