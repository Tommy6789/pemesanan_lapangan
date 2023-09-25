<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("team_model");
        $this->load->library('session');
    }

    public function index()
    {
        //echo "hello world";
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard');
        $this->load->view('template/footer');
    }
    public function Pemesanan_team()
    {
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('form_input_team');
        $this->load->view('template/footer');
    }
    public function simpan_data_team()
    {
        $simpan_data = $this->team_model;
        $hasil = $simpan_data->save();
    if($hasil){
        $this->session->set_flashdata('message', 'success');
        redirect('team/data_team');
        }else{
        $this->session->set_flashdata('message', 'error');
        redirect('team/data_team');
        }
    }
    public function data_team()
    {
        $data = $this->team_model;
        $hasil['data'] = $data->select();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('data_team',$hasil);
        $this->load->view('template/footer');
    }
    //Berfungsi untuk penampilkan data yang akan di edit
    public function update_team()
    {
        $data = $this->team_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('form_update_team',$hasil);
        $this->load->view('template/footer');
    }
    //Berfungsi untuk menyimpan data pemesanan yang di edit
    public function update_data()
    {
        $data = $this->team_model;
        $update = $data->update();

        if($update){
            $this->session->set_flashdata('message', 'success update');
            redirect('team/data_team');
            }else{
            $this->session->set_flashdata('message', 'error');
            redirect('team/data_team');
            }
        }
    //Berfungsi untuk menghapus data pemesanan
    public function delete_team()
    {
        $data = $this->team_model;
        $delete = $data->delete($this->input->get('id'));
        if($delete){
            $this->session->set_flashdata('message', 'success delete');
            redirect('team/data_team');
            }else{
            $this->session->set_flashdata('message', 'error');
            redirect('team/data_team');
            }
    }
}


/* End of file Pemesanan.php and path \application\controllers\pemesanan\Pemesanan.php */