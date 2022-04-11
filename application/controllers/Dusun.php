<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dusun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dusun', 'list_dus');
        $this->load->model('M_desa');
        // $this->load->model('M_nilai');
        $this->load->helper('form', 'url', 'number');
    }

    public function index()
    {
        $data['desa']=$this->list_dus->get_desa();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');   
        $this->load->view('data_dusun',$data);
        $this->load->view('layouts/footer');
    }

    public function ajax_list1()
    {
        $list = $this->list_dus->get_datatables();
        // var_dump($list);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $list_dus) {
            $no++;
            $row = array();
            $row[] = '<center>' . $no . '</center>';
            $row[] = $list_dus->id_desa;
            $row[] = $list_dus->nama_dusun;

            //add html for action
            $row[] = '<center>
                  <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_data(' . "'" . $list_dus->id_dusun . "'" . ')"><i class="fa fa-edit"></i> Update</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $list_dus->id_dusun . "'" . ')"><i class="fa fa-trash"></i> Hapus</a>
                  </center>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->list_dus->count_all(),
            "recordsFiltered" => $this->list_dus->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit1($id)
    {
        $data = $this->list_dus->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_add1()
    {
        $id_desa = $this->input->post('id_desa');
        $nama_dusun = $this->input->post('nama_dusun');

        $data = array(
            'id_desa'                 => $id_desa,
            'nama_dusun'                 => $nama_dusun,
        );
        $insert = $this->list_dus->save($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_update1()
    {
        $id_desa = $this->input->post('id_desa');
        $nama_dusun = $this->input->post('nama_dusun');
        $data = array(
            'id_desa'                 => $id_desa,
            'nama_dusun'                 => $nama_dusun,

        );

        $this->list_dus->update(array('id_dusun' => $this->input->post('id_dusun')), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_delete1($id)
    {
        $this->list_dus->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
