<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller  {
        
        function __construct()
        {
            parent::__construct();
            $session=$this->session->userdata('id_adm');
            if (!empty($session)) 
            {
                $this->load->model('Datakriteria');
               
        }
            else
            {
                redirect('Login');
            }
            
        }
     public function session_data()
    {
    $session=$this->session->userdata('id_adm');
    return $session;
    }
    public function index()
    {
     
        $this->template->load('template','adm/Dashboard');
    }

    public function Peminatan()
    {
        $data['minat']=$this->Datapeminatan->get();
        
        $this->template->load('template','adm/Peminatan',$data);
    }
    public function lihat_p($idpeminatan)
    {
        $data['minat']=$this->Datapeminatan->one($idpeminatan);
        $this->template->load('template','adm/peminatandetail',$data);
    }
    public function tambah_p()
    {
        $this->template->load('template','adm/form_peminatan');
    }
    public function tambahkan_p()
    {
        $this->Datapeminatan->insert_p();
        redirect('adm/Dashboard/Peminatan');
    }
    public function update_p($idsoal)
    {
        $this->Datapeminatan->update_p($idpeminatan);
        redirect('adm/Dashboard/Peminatan');
    }
    public function hapus_p($idpeminatan)
    {
        $this->Datapeminatan->delete_p($idpeminatan);
        redirect('adm/Dashboard/Peminatan');
    }
}