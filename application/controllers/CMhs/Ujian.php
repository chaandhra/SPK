<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller  {
        
        function __construct()
        {
            parent::__construct();
            $session=$this->session->userdata('id');
            if (!empty($session)) 
            {
                $this->load->model('Datamahasiswabaru');
                $this->load->model('Datasoal');
               
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
        $this->template->load('template', 'Cmhs/Home',$data);
    }

    public function psikotes($idmahasiswabaru)
    {
        $data['mahasiswabaru']= $this->Datamahasiswabaru->one($idmahasiswabaru);
        $data['Soal']= $this->Datasoal->getpsikotes();
        $data['Soal2']= $this->Datasoal->getpsikotes2();
        foreach ($this->Datasoal->getpsikotes() as $key) {
            $data['c']=$key['jawaban_benar'];
        }

        $this->template->load('template','Cmhs/psikotes',$data);
    }
    public function hasil_pisikotes($idpeserta)
    {   
        $this->Datasoal->hasil($idpeserta);
        redirect('CMhs/home#');

    }



    public function peminatan($idmahasiswabaru)
    {
        $data['mahasiswabaru']= $this->Datamahasiswabaru->one($idmahasiswabaru);
        $data['Soal']= $this->Datasoal->getsoalpeminatan();
        //$data['Soal2']= $this->Datasoal->getpeminatan2();
        foreach ($this->Datasoal->getsoalpeminatan() as $key) {
            $data['c']=$key['jawaban_benar'];
        }
        $this->template->load('template','Cmhs/peminatan',$data);
    }
    public function hasil_peminatan($idpeserta)
    {   
        $this->Datasoal->hasil_peminatan($idpeserta);
        redirect('CMhs/home#');

    }

        //$this->Datasoal->hitung();
        //echo "Succes";
    
}