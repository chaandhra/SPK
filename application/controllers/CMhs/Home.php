<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller  {
        
        function __construct()
        {
            parent::__construct();
            $session=$this->session->userdata('id');
            if (!empty($session)) 
            {
                $this->load->model('Datamahasiswabaru');
               
            }
            else
            {
                redirect('Login');
            }
            
        }
     public function session_data()
    {
    $session=$this->session->userdata('id');
    return $session;
    }
    public function index()
    {
        $iduser=$this->session_data();
        $data['mahasiswabaru']=$this->Datamahasiswabaru->one($iduser);
        //print_r($data);
        $this->template->load('template','Cmhs/Home',$data);
    }
    public function biodata($idmahasiswabaru)
    {
        $this->Datamahasiswabaru->update_s($idmahasiswabaru);
        redirect('CMhs/Home');
    }
    public function psikotes($idmahasiswabaru)
    {
        $data['mahasiswabaru']= $this->Datamahasiswabaru->one($idmahasiswabaru);
        $this->template->load('template', 'Cmhs/psikotes',$data);
    }
}