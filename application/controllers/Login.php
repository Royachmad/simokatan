<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_login');
        $this->load->library(array('form_validation','session'));    
        $this->load->database();    
        $this->load->helper('form', 'url', 'number');
    }

    public function index()
    {
            $this->load->view('layouts/header');
            $this->load->view('login');
            $this->load->view('layouts/footer'); 
              
       
    }

    function cek_login(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<span class="error">', '</span>');
      
        if($this->form_validation->run()==FALSE)
        {
          $this->load->view('login');
        }else
        {
         $username = addslashes($this->input->post('username'));
         $password = addslashes($this->input->post('password'));
      
         $cek = $this->M_login->get_user($username, $password);
         // var_dump($cek->num_rows());
         if($cek->num_rows() <> 0){
          $data = $cek->row();     
          $id_user     = $data->id_user ; 
          
          $this->session->set_userdata('isLogin', TRUE);
          $this->session->set_userdata('username',$username);    
          
          if ($data->level == 'Manajerial') {
            $this->session->set_userdata('level','Manajerial');
            redirect('dashboard');
          }
        //   elseif ($data->level==2) {
        //     $this->session->set_userdata('level','2');
        //     redirect('dashboard');    
        //   }
        //   elseif ($data->level==3) {
        //     $this->session->set_userdata('level','3');
        //     redirect('tatib');    
        //   }
        }else{
           echo " <script>
           alert('Login Gagal: Cek Kembali username dan password yang anda masukkan . . ');
           history.go(-1);
           </script>";        
         
       }  
      }
      }
      function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect('Login');
      }
}
