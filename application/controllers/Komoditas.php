<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komoditas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_komoditas','list_komo');
        // $this->load->model('M_nilai');
        $this->load->helper('form', 'url', 'number');
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('data_komoditas');
        $this->load->view('layouts/footer');
    }

    public function ajax_list1()
    {
        $list = $this->list_komo->get_datatables();
        // var_dump($list);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $list_komo) {
            $no++;
            $row = array();
            $row[] = '<center>' . $no . '</center>';
            $row[] = $list_komo->nama_komoditas;
            //add html for action
            $row[] = '<center>
                  <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_data(' . "'" . $list_komo->id_komoditas . "'" . ')"><i class="fa fa-edit"></i> Update</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $list_komo->id_komoditas . "'" . ')"><i class="fa fa-trash"></i> Hapus</a>
                  </center>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->list_komo->count_all(),
            "recordsFiltered" => $this->list_komo->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit1($id)
    {
        $data = $this->list_komo->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_add1()
    {
        $nama_komoditas = $this->input->post('nama_komoditas');
        $data = array(
            'nama_komoditas'                 => $nama_komoditas,
        );
        $insert = $this->list_komo->save($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_update1()
    {
        $nama_komoditas = $this->input->post('nama_komoditas');
        $data = array(
            'nama_komoditas'                 => $nama_komoditas,

        );

        $this->list_komo->update(array('id_komoditas' => $this->input->post('id_komoditas')), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_delete1($id)
    {
        $this->list_komo->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
