<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Team_model extends CI_Model 
{
    //ini deklarasi nama table
    private $table='team';

    public function select()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result();
    }      
    //ini function menyimpan data pemesanan
    public function save()
    {
        $data = array(
            "create_time" => $this->input->post('create_time'),
            "name_team" => $this->input->post('name_team'),
            "jumlah_pemain" => $this->input->post('jumlah_pemain')
        );
        
        return $this->db->insert($this->table, $data);
    }
    public function show_data()
    {
        $id = $this->input->get('id');
        $this->db->from($this->table)->where('id',$id);
        $query = $this->db->get();
        return $query->result();
    }
    public function update()
    {
        $data = array(
            "create_time" => $this->input->post('create_time'),
            "name_team" => $this->input->post('name_team'),
            "jumlah_pemain" => $this->input->post('jumlah_pemain')
        );
        
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update($this->table,$data);
    }
    //Berfungsi untuk menghapus data
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->table);
    }
}


/* End of file Pemesanan_model.php and path \application\models\pemesanan\Pemesanan_model.php */
