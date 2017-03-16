<?php 
	class Datamahasiswabaru extends CI_Model
	{
		
		function get()
		{
			$this->db->select('*')
					->from('mahasiswabaru');
			$query = $this->db->get();
			return $query->result_array();
		}
		function getcount()
		{
			$this->db->select('minat, COUNT(minat) as total')
					->group_by('minat')
					->order_by('minat');
					
			$query = $this->db->get('mahasiswabaru');
			return $query->result_array();
		}
		function one($idmahasiswabaru)
		{
			$this->db->where('idmahasiswabaru_',$idmahasiswabaru)
						->or_where('idmahasiswabaru',$idmahasiswabaru)
					->from('mahasiswabaru');
			$query = $this->db->get();
			return $query->result_array();
		}
		function insert_s()
		{
			$data = array('nama_mahasiswabaru' => $this->input->post('nama_mahasiswabaru'),
							'asal_sekolah' => $this->input->post('asal_sekolah'),
							'nilai_mtk' => $this->input->post('nilai_mtk'),
							'nilai_bindonesia' => $this->input->post('nilai_bahasa_indonesia'),
							'nilai_binggris' => $this->input->post('nilai_bahasa_inggris'),
							'idmahasiswabaru_' => $this->kode()
							);
			$data2 = array('email' => $this->input->post('username'),
							'nama_lengkap' => $this->input->post('username'),
							'password' => md5($this->input->post('username')),
							'idmahasiswabaru_' => $this->kode()
							
			 );
			$this->db->insert('mahasiswabaru',$data);
			$this->db->insert('cmhs',$data2);

		}
		function update_s($idmahasiswabaru)
		{
			$data = array('nama_mahasiswabaru' => $this->input->post('nama_mahasiswabaru'),
							'asal_sekolah' => $this->input->post('asal_sekolah'),
							'nilai_mtk' => $this->input->post('nilai_mtk'),
							'nilai_bindonesia' => $this->input->post('nilai_bahasa_indonesia'),
							'nilai_binggris' => $this->input->post('nilai_bahasa_inggris'),
							);
			$this->db->where('idmahasiswabaru_',$idmahasiswabaru);
			$this->db->update('mahasiswabaru',$data);
		}
		function delete_s($idmahasiswabaru)
		{
			$this->db->where('idmahasiswabaru',$idmahasiswabaru)
						->from('mahasiswabaru');
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