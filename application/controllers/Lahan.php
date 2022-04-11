<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lahan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_master', 'list_kec');
        $this->load->model('M_desa', 'list_des');
        $this->load->model('M_dusun', 'list_dus');
        $this->load->model('M_lahan', 'list_lahan');

        // $this->load->model('M_Dashboard');
        // $this->load->model('M_nilai');
        $this->load->helper('form', 'url', 'number');
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('data_lahan');
        $this->load->view('layouts/footer');
    }
    public function tambah_titik()
    {
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('tambah_titik');
        $this->load->view('layouts/footer');
    }

    public function ajax_list1()
    {
        $list = $this->list_kec->get_datatables();
        // var_dump($list);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $list_kec) {
            $no++;
            $row = array();
            $row[] = '<center>' . $no . '</center>';
            $row[] = $list_kec->nama_kecamatan;
            //add html for action
            $row[] = '<center>
                  <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_data(' . "'" . $list_kec->id_kecamatan . "'" . ')"><i class="fa fa-edit"></i> Update</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $list_kec->id_kecamatan . "'" . ')"><i class="fa fa-trash"></i> Hapus</a>
                  </center>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->list_kec->count_all(),
            "recordsFiltered" => $this->list_kec->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit1($id)
    {
        $data = $this->list_kec->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_add1()
    {
        $nama_kecamatan = $this->input->post('nama_kecamatan');
        $data = array(
            'nama_kecamatan'                 => $nama_kecamatan,
        );
        $insert = $this->list_kec->save($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_update1()
    {
        $nama_kecamatan = $this->input->post('nama_kecamatan');
        $data = array(
            'nama_kecamatan'                 => $nama_kecamatan,

        );

        $this->list_kec->update(array('id_kecamatan' => $this->input->post('id_kecamatan')), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_delete1($id)
    {
        $this->list_kec->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }


}
