<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_komoditas extends CI_Model
{
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    } 
      var $table = 'komoditas';
      var $column_order = array('nama_komoditas'); //set column field database for datatable orderable
      var $column_search = array('nama_komoditas'); //set column field database for datatable searchable just firstname , lastname , address are searchable
      var $order = array('id_komoditas' => 'desc'); // default order 
   
      private function _get_datatables_query()
      {
           
          $this->db->from($this->table);
   
          $i = 0;
       
          foreach ($this->column_search as $item) // loop column 
          {
              if($_POST['search']['value']) // if datatable send POST for search
              {
                   
                  if($i===0) // first loop
                  {
                      $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                      $this->db->like($item, $_POST['search']['value']);
                  }
                  else
                  {
                      $this->db->or_like($item, $_POST['search']['value']);
                  }
   
                  if(count($this->column_search) - 1 == $i) //last loop
                      $this->db->group_end(); //close bracket
              }
              $i++;
          }
           
          if(isset($_POST['order'])) // here order processing
          {
              $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
          } 
          else if(isset($this->order))
          {
              $order = $this->order;
              $this->db->order_by(key($order), $order[key($order)]);
          }
      }  

  function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

  function count_filtered()
  {
      $this->_get_datatables_query();
      $query = $this->db->get();
      return $query->num_rows();
  }

  public function count_all()
  {
      $this->db->from($this->table);
      return $this->db->count_all_results();
  }

  public function get_by_id($id)
  {
      $this->db->from($this->table);
      $this->db->where('id_komoditas',$id);
      $query = $this->db->get();

      return $query->row();
  }

  public function save($data)
  {
      $this->db->insert('komoditas', $data);
      return $this->db->insert_id();
  }
  public function update($where, $data)
  {
      $this->db->update('komoditas', $data, $where);
      return $this->db->affected_rows();
  }

  public function delete_by_id($id)
  {
      $this->db->where('id_komoditas', $id);
      $this->db->delete('komoditas');
  }

  function komoditas(){
    $this->db->order_by('nama_komoditas','ASC');
    $komoditas= $this->db->get('komoditas');
    return $komoditas->result_array();
 }
 function desa($komoditasId){

    $komoditas="<option value=''>--pilih--</pilih>";
    
    $this->db->order_by('nama_desa','ASC');
    $kec= $this->db->get_where('desa',array('id_komoditas'=>$komoditasId));
    
    foreach ($kec->result_array() as $data ){
    $komoditas.= "<option value='$data[id_komoditas]'>$data[nama_komoditas]</option>";
    }
    
    return $komoditas;
    
    }
    
    function dusun($desaId){
    $desa="<option value=''>--pilih--</pilih>";
    
    $this->db->order_by('nama_desa','ASC');
    $des= $this->db->get_where('dusun',array('id_desa'=>$desaId));
    
    foreach ($des->result_array() as $data ){
    $desa.= "<option value='$data[id_desa]'>$data[nama_desa]</option>";
    }
    
    return $desa;
    }

}


?>