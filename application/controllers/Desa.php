<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_desa', 'list_des');
        $this->load->model('M_master');
        // $this->load->model('M_nilai');
        $this->load->helper('form', 'url', 'number');
    }

    public function index()
    {
        $data['kecamatan']=$this->list_des->get_kecamatan();
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');   
        $this->load->view('data_desa',$data);
        $this->load->view('layouts/footer');
    }

    public function ajax_list1()
    {
        $list = $this->list_des->get_datatables();
        // var_dump($list);
        $data = array();
        $no = $_POST['start'];
        $this->db->join('kecamatan', 'desa.id_kecamatan = kecamatan.id_kecamatan'); 
        foreach ($list as $list_des) {
            $no++;
            $row = array();
            $row[] = '<center>' . $no . '</center>';
            $row[] = $list_des->id_kecamatan;
            $row[] = $list_des->nama_desa;

            //add html for action
            $row[] = '<center>
                  <a class="btn btn-sm btn-warning" href="javascript:void(0)" title="Edit" onclick="edit_data(' . "'" . $list_des->id_desa . "'" . ')"><i class="fa fa-edit"></i> Update</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_data(' . "'" . $list_des->id_desa . "'" . ')"><i class="fa fa-trash"></i> Hapus</a>
                  </center>';
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->list_des->count_all(),
            "recordsFiltered" => $this->list_des->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit1($id)
    {
        $data = $this->list_des->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_add1()
    {
        $id_kecamatan = $this->input->post('id_kecamatan');
        $nama_desa = $this->input->post('nama_desa');

        $data = array(
            'id_kecamatan'                 => $id_kecamatan,
            'nama_desa'                 => $nama_desa,
        );
        $insert = $this->list_des->save($data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_update1()
    {
        $id_kecamatan = $this->input->post('id_kecamatan');
        $nama_desa = $this->input->post('nama_desa');
        $data = array(
            'id_kecamatan'                 => $id_kecamatan,
            'nama_desa'                 => $nama_desa,

        );

        $this->list_des->update(array('id_desa' => $this->input->post('id_desa')), $data);
        echo json_encode(array("status" => TRUE));
    }
    public function ajax_delete1($id)
    {
        $this->list_des->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }
}
