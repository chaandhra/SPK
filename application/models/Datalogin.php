<?php 
	class Datalogin extends CI_Model
	{
		
		public function Adm($username,$password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$q=$this->db->get('adm');
			if ($q->num_rows()>0) 
			{
				return $q;
			}
			else
			{
				return null;
			}
		}
		public function CMhs($username,$password)
		{
			$this->db->where('email',$username);
			$this->db->where('password',$password);
			$q=$this->db->get('cmhs');
			if ($q->num_rows()>0) 
			{
				return $q;
			}
			else
			{
				return null;
			}
		}
		public function Daftar()
		{
			$data = array('email' => $this->input->post('username'),
							'nama_lengkap' => $this->input->post('nama_lengkap'),
							'password' => md5($this->input->post('password')),
							'idmahasiswabaru_' => $this->kode()
							
			 );
			$data2 = array('idmahasiswabaru_' => $this->kode(),
			'nama_mahasiswabaru' => $this->input->post('nama_lengkap'),
			'minat' => $this->input->post('minat'),
			'asal_sekolah' => $this->input->post('asal_sekolah'), );
			$this->db->insert('mahasiswabaru',$data2);
			$this->db->insert('cmhs',$data);
		}
		function kode()
		{
			$this->db->select('RIGHT(mahasiswabaru.idmahasiswabaru,4) as kode', FALSE);
			$this->db->order_by('idmahasiswabaru','DESC');
			$this->db->limit(1);
			$query = $this->db->get('mahasiswabaru');
//cek dulu apakah ada sudah ada kode di tabel.
			if($query->num_rows() <> 0){
//jika kode ternyata sudah ada.
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
//jika kode belum ada
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "STMIK".$kodemax;
		return $kodejadi;
	}


}