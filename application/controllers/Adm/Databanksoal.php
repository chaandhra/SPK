<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databanksoal extends CI_Controller  {
        
        function __construct()
        {
            parent::__construct();
            $session=$this->session->userdata('id_adm');
            if (!empty($session)) 
            {
                $this->load->model('Datasoal');
               
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
     	$data['soal']=$this->Datasoal->get();
        $this->template->load('template','adm/Soal',$data);
    }
    public function lihat($idsoal)
    {
    	$data['peminatan']=$this->Datasoal->getpeminatan();
     	$data['soal']=$this->Datasoal->one($idsoal);
        $this->template->load('template','adm/soaldetail',$data);
    }
    public function tambah()
    {
    	$data['peminatan']=$this->Datasoal->getpeminatan();
        $this->template->load('template','adm/form_soal',$data);
    }
    public function tambahkan()
    {
        $this->Datasoal->insertsoal();
        redirect('adm/Databanksoal');
    }
    public function update($idsoal)
    {
        $this->Datasoal->update($idsoal);
        redirect('adm/Databanksoal');
    }
    public function hapus($idsoal)
    {
     	$this->Datasoal->delete($idsoal);
        redirect('adm/Databanksoal');
    }
}