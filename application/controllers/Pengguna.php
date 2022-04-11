<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_pengguna', 'list_pengguna');
        // $this->load->model('M_nilai');
        $this->load->helper('form', 'url', 'number');
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('data_user');
        $this->load->view('layouts/footer');
    }

    public function ajax_list1()
    {
        $list = $this->list_pengguna->get_datatables();
        // var_dump($list);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $list_pengguna) {
            $no++;
            $row = array();
            $row[] = '<center>' . $no . '</center>';
            $row[] = $list_pengguna->nama_lengkap;
            $row[] = $list_pengguna->username;
            $row[] = $list_pengguna->email;
            $row[] = $list_pengguna->level;


            //add html for action
            $row[] = '<center>
                  <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_data(' . "'" . $list_pengguna->id_user . "'" . ')"><i class="fa fa-edit"></i> Update</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $list_pengguna->id_user . "'" . ')"><i class="fa fa-trash"></i> Hapus</a>
                  </center>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->list_pengguna->count_all(),
            "recordsFiltered" => $this->list_pengguna->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit1($id)
    {
        $data = $this->list_pengguna->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_add1()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama_lengkap'                 => $nama_lengkap,
            'username'                 => $username,
            'email'                     => $email,
            'password'                  => $password,
            'level'                     => $level,
        );
        $insert = $this->list_pengguna->save($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_update1()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
           'nama_lengkap'                 => $nama_lengkap,
            'username'                 => $username,
            'email'                     => $email,
            'password'                  => $password,
            'level'                     => $level,

        );

        $this->list_pengguna->update(array('id_user' => $this->input->post('id_user')), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_delete1($id)
    {
        $this->list_pengguna->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
