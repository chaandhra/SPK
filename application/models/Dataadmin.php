<?php 
	class Dataadmin extends CI_Model
	{
		
		function get()
		{
			$this->db->select('*')
					->from('adm');
			$query = $this->db->get();
			return $query->result_array();
		}
		function one($idadmin)
		{
			$this->db->where('id_adm',$idadmin)
					->from('adm');
			$query = $this->db->get();
			return $query->result_array();
		}
		function insert_a()
		{
			$data = array(	'username' => $this->input->post('username'),
							'password' => md5($this->input->post('password')),
							'nama' => $this->input->post('nama')
							
			 );
			$this->db->insert('adm',$data);
		}
		function update_a($idadmin)
		{
			$data = array(	'username' => $this->input->post('username'),
							'password' => md5($this->input->post('password')),
							'nama' => $this->input->post('nama')
							
			 );
			$this->db->where('id_adm',$idadmin);
			$this->db->update('adm',$data);
		}
		function delete_a($idadmin)
		{
			$this->db->where('id_adm',$idadmin)
						->from('adm');
						$this->db->delete();
		}
	}