<?php 
	class Datapeminatan extends CI_Model
	{
		
		function get()
		{
			$this->db->select('*')
			->where_not_in('nama_peminatan','Psikotes')
			->from('peminatan');
			$query = $this->db->get();
			return $query->result_array();
		}
		function one($idpeminatan)
		{
			$this->db->where('idpeminatan',$idpeminatan)
					->from('peminatan');
			$query = $this->db->get();
			return $query->result_array();
		}
		function insert_p()
		{
			$data = array('nama_peminatan' => $this->input->post('nama_peminatan'));
			$this->db->insert('peminatan',$data);
		}
		function update_p($idpeminatan)
		{
			$data = array('nama_peminatan' => $this->input->post('nama_peminatan'));
			$this->db->set('idpeminatan',$idpeminatan);
			$this->db->update('peminatan',$data);
		}
		function delete_p($idpeminatan)
		{
			$this->db->where('idpeminatan',$idpeminatan)
						->from('peminatan');
						$this->db->delete();
		}

	}