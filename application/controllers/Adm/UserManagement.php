<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManagement extends CI_Controller  {
        
        function __construct()
        {
            parent::__construct();
            $session=$this->session->userdata('id_adm');
            if (!empty($session)) 
            {
                $this->load->model('Datauser');
                $this->load->model('Dataadmin');
                $this->load->model('Datamahasiswabaru');
               
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
     	$data['user']=$this->Datauser->get();
        $this->template->load('template','adm/user',$data);
    }
    public function lihat($iduser)
    {
     	$data['user']=$this->Datauser->one($iduser);
        $this->template->load('template','adm/userdetail',$data);
    }
    public function tambah()
    {
        $this->template->load('template','adm/form_user');
    }
    public function tambahkan()
    {
        $this->Datauser->insertuser();
        redirect('adm/UserManagement');
    }
    public function update($iduser)
    {
        $this->Datauser->update($iduser);
        redirect('adm/UserManagement');
    }
    public function hapus($iduser)
    {
		$idmahasiswabaru=$iduser;
     	$this->Datauser->delete_u($iduser);
		$this->Datamahasiswabaru->delete_s($idmahasiswabaru);
        redirect('adm/UserManagement');
    }

    public function siswa()
    {
        $data['mahasiswabaru']=$this->Datamahasiswabaru->get();
        $this->template->load('template','adm/siswa',$data);
    }
    public function lihat_s($idmahasiswabaru)
    {
        $data['user']=$this->Datamahasiswabaru->one($idmahasiswabaru);
        $data['mahasiswabaru']=$this->Datamahasiswabaru->one($idmahasiswabaru);
        $this->template->load('template','adm/siswadetail',$data);
    }
    public function tambah_s()
    {
        $this->template->load('template','adm/form_siswa');
    }
    public function tambahkan_s()
    {
        $this->Datamahasiswabaru->insert_s();
        redirect('adm/UserManagement/siswa');
    }
    public function update_s($idmahasiswabaru)
    {
        $this->Datamahasiswabaru->update_s($idmahasiswabaru);
        redirect('adm/UserManagement/siswa');
    }
    public function hapus_s($idmahasiswabaru)
    {
        $this->Datamahasiswabaru->delete_s($idmahasiswabaru);
		$iduser=$idmahasiswabaru;
     	$this->Datauser->delete_u($iduser);
        redirect('adm/UserManagement/siswa');
    }

    public function admin()
    {
        $data['admin']=$this->Dataadmin->get();
        $this->template->load('template','adm/admin',$data);
    }
    public function lihat_a($idadmin)
    {
        $data['admin']=$this->Dataadmin->one($idadmin);
        $this->template->load('template','adm/admindetail',$data);
    }
    public function tambah_a()
    {
        $this->template->load('template','adm/form_admin');
    }
    public function tambahkan_a()
    {
        $this->Dataadmin->insert_a();
        redirect('adm/UserManagement/admin');
    }
    public function update_a($idadmin)
    {
        $this->Dataadmin->update_a($idadmin);
        redirect('adm/UserManagement/admin');
    }
    public function hapus_a($idadmin)
    {
        $this->Dataadmin->delete_a($idadmin);
        redirect('adm/UserManagement/siswa');
    }

}