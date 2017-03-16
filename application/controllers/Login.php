<?php
Class Login extends CI_Controller {

public function __construct() {
parent::__construct();
$this->load->model('Datalogin');
$this->load->model('Datasoal');


}
	public function index()
	{
        $data['peminatan']=$this->Datasoal->getpeminatan();
		$this->template->load('template', 'Login_form',$data);
	}
	public function check($username,$p)
    {
            $p=$this->input->post('password');
            $username=$this->input->post('username');
            
            $password=md5($p);
            $cekSuper=$this->Datalogin->Adm($username,$password);
            if ($cekSuper!=null) 
            {
                foreach ($cekSuper->result() as $row)
                {
                    $session = array(
                        'id_adm' => $row->id_adm, 
                        'username' => $row->username,
                        'password' => $row->password,
                        'nama' => $row->nama,
                        'L' => $row->L  
                        );
                    $this->session->set_userdata($session);
                    redirect('Adm/Dashboard');
                };
            }
            else
            {
                $cekid=$this->Datalogin->CMhs($username,$password);
                if ($cekid!=null) 
                {
                    foreach ($cekid->result() as $row)
                    {
                        $session = array(
                        'id' => $row->id, 
                        'username' => $row->username,
                        'nama' => $row->nama,  
                        'password' => $row->password,
                        'idmahasiswabaru_' => $row->idmahasiswabaru_, 
                            );
                        $this->session->set_userdata($session);
                        redirect('CMhs/home');
                    }
                }
                else
                {
                    $this->session->set_flashdata('pesan','<div class="uk-alert uk-alert-danger" data-uk-alert><center>Username atau Password salah!!!</center></div><br>');
                    redirect('Login');
                    }
            }
    }
    public function out($session)
        {
            $session=$this->session->unset_userdata($session);
            if (empty($session)) 
            {
                redirect("".base_url()."");
            }
            else
            {
                echo "NYANTOL";
            }
        }
    public function Daftar()
        {
            $this->Datalogin->Daftar();
            $username =$this->input->post('email');
            $p =$this->input->post('password');
            $this->check($username,$p);
        }
}