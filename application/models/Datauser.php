<?php 
	class Datauser extends CI_Model
	{
		
		function get()
		{
			$this->db->select('*')
					->from('cmhs');
			$query = $this->db->get();
			return $query->result_array();
		}
		function one($iduser)
		{
			$this->db->where('id',$iduser)
					->from('cmhs');
			$query = $this->db->get();
			return $query->result_array();
		}
		function insertuser()
		{
			$data = array('email' => $this->input->post('email'),
							'nama_lengkap' => $this->input->post('username'),
							'password' => md5($this->input->post('password')),
							'idmahasiswabaru_' => $this->kode()
							
			 );
			 $data2 = array('nama_mahasiswabaru' => $this->input->post('username'),
							'idmahasiswabaru_' => $this->kode()
							);
			$this->db->insert('cmhs',$data);
			$this->db->insert('mahasiswabaru',$data2);
		}
		function update($iduser)
		{
			$data = array('id' => $iduser,
				'email' => $this->input->post('email'),
							'nama_lengkap' => $this->input->post('username'),
							'password' => md5($this->input->post('password'))
							
			 );
			$this->db->where('id',$iduser);
			$this->db->update('cmhs',$data);
		}
		function delete_u($iduser)
		{
			$this->db->where('id',$iduser)
						->from('cmhs');
						$this->db->delete();
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