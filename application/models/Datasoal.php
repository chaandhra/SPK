<?php 
	class Datasoal extends CI_Model
	{
		
		function get()
		{
			$this->db->select('*')
					->from('banksoal');
			$query = $this->db->get();
			return $query->result_array();
		}
		function getpeminatan()
		{
			$this->db->select('*')
					->from('peminatan');
			$query = $this->db->get();
			return $query->result_array();
		}
		function getpsikotes()
		{
			$psi = "psikotes";
			$this->db->where('nama_peminatan',$psi)
					->order_by('rand()')
					->from('banksoal');
			$query = $this->db->get();
			return $query->result_array();
		}
		function getpsikotes2()
		{
			$psi = "psikotes";
			$this->db->where('nama_peminatan',$psi)
					->from('banksoal');
			$query = $this->db->get();
			return $query->num_rows();
		}
		function getsoalpeminatan()
		{
			$psi = "psikotes";
			$this->db->where_not_in('nama_peminatan',$psi)
					->order_by('rand()')
					->from('banksoal');
			$query = $this->db->get();
			return $query->result_array();
		}
		function one($idsoal)
		{
			$this->db->where('idsoal',$idsoal)
					->from('banksoal');
			$query = $this->db->get();
			return $query->result_array();
		}
		function insertsoal()
		{
			$data = array('pertanyaan' => $this->input->post('pertanyaan') ,
							'jawaban_a' => $this->input->post('j_a'),
							'jawaban_b' => $this->input->post('j_b'),
							'jawaban_c' => $this->input->post('j_c'),
							'jawaban_d' => $this->input->post('j_d'),
							'jawaban_benar' => $this->input->post('jawaban_benar'),
							'nama_peminatan' => $this->input->post('nama_peminatan')
							
			 );
			$this->db->insert('banksoal',$data);
		}
		function update($idsoal)
		{
			$data = array('idsoal' => $idsoal,
							'pertanyaan' => $this->input->post('pertanyaan') ,
							'jawaban_a' => $this->input->post('j_a'),
							'jawaban_b' => $this->input->post('j_b'),
							'jawaban_c' => $this->input->post('j_c'),
							'jawaban_d' => $this->input->post('j_d'),
							'jawaban_benar' => $this->input->post('jawaban_benar'),
							'nama_peminatan' => $this->input->post('nama_peminatan')
							
			 );
			$this->db->where('idsoal',$idsoal);
			$this->db->update('banksoal',$data);
		}
		function delete($idsoal)
		{
			$this->db->where('idsoal',$idsoal)
						->from('banksoal');
						$this->db->delete();
		}

		function gethasil($idpeserta){
			$this->db->where('id_peserta',$idpeserta)
			->select('SUM(bobot)as total')
					->from('ujian_psikotes');
					$q=$this->db->get();
					$row=$q->row();
					return $row->total;
		}
		function converter($data){
			$ter2 = str_replace('"', '', $data);
					$er = ":";
					$e =",";
					$ert = strtr($ter2,$er,$e);
					$ert2 = explode("{",$ert);
					$ert3 = preg_replace("~}~", "", $ert2);
					return ",".$ert3[1];
		}
		function implode($data){
			$implode = implode("-",$data);
			 $replaced = str_replace("-",",", $implode);
			 //$splited = str_split($replaced);
			return $replaced;
		}
		function cek($data){
			$this->db->where_in('idsoal',$data)
					->from('banksoal');
					$q = $this->db->get();
					return $q->result_array();
		}


		function hasil($idpeserta){
			
			$id_soal=$this->input->post('nosoal[]');
			$pilihan=$this->input->post('jawaban_user[]');
			$arrayName = array('idsoal' =>$id_soal , );
			$arrayName2 = array('jawaban_user' =>$pilihan , );
			$jumlah = count($id_soal);
			//echo $jumlah;
			for ($i=0; $i <$jumlah ; $i++) { 
				$this->db->select('*')
					->from('banksoal')
					->where('idsoal',$id_soal[$i]);
					$q = $this->db->get();
					$qq=$q->result_array();
					foreach ($qq as $hasil ) {
						$soalid = $hasil['idsoal'];
						$jawaba = $hasil['jawaban_benar'];
						$kategor = $hasil['nama_peminatan'];
						$hasi=0;
						if ($soalid.$jawaba==$id_soal[$i].$pilihan[$i]) {
							$hasi++;
						}
						$arrayName = array('nilai' =>$hasi,
							'kategori_soal' => $kategor,
							'id_peserta'=>$idpeserta);
   						$this->db->insert('ujian_psikotes',$arrayName);
					}
			}
			//cek jumlah benar
			$this->db->select('*')
			->from('ujian_psikotes')
			->where('id_peserta',$idpeserta)
			->where_in('nilai',1);
			$hasilnya=$this->db->get();
			$cek=$hasilnya->num_rows();

			//cek jumlah salah
			$salah = $jumlah-$cek;

			//echo $jumlah;
			//echo $cek;
			$hasill=0;
			$hasilahir = $cek/$jumlah;
			$presentase = $this->Conversi($hasilahir);
			$hasilpresentase =$presentase*100;
			$this->db->where('id_peserta',$idpeserta)
			->delete('ujian_psikotes');
			//if ($hasilahir!=1) {
			//	echo $this->Conversi($hasilahir);
			//}else{
			//	echo $hasilahir;
			//}
			echo $hasilpresentase;
			
			$status = "Done";
			$arrayHasil =array('nilai_psikotes' => $hasilpresentase,
				'status'=>$status);
			$this->db->where('idmahasiswabaru_',$idpeserta)
			->update('mahasiswabaru',$arrayHasil);
	}
	function Conversi($prices){
		return number_format( (float) $prices, 2, '.' , ',');
	}
	function hasil_peminatan($idpeserta){
			
			$id_soal=$this->input->post('nosoal[]');
			$pilihan=$this->input->post('jawaban_user[]');
			$arrayName = array('idsoal' =>$id_soal , );
			$arrayName2 = array('jawaban_user' =>$pilihan , );
			$jumlah = count($id_soal);
			//echo $jumlah;
			for ($i=0; $i <$jumlah ; $i++) { 
				$this->db->select('*')
					->from('banksoal')
					->where('idsoal',$id_soal[$i]);
					$q = $this->db->get();
					$qq=$q->result_array();
					foreach ($qq as $hasil ) {
						$soalid = $hasil['idsoal'];
						$jawaba = $hasil['jawaban_benar'];
						$kategor = $hasil['nama_peminatan'];
						$hasi=0;
						if ($soalid.$jawaba==$id_soal[$i].$pilihan[$i]) {
							$hasi++;
						}
						$arrayName = array('nilai' =>$hasi,
							'kategori_soal' => $kategor,
							'id_peserta'=>$idpeserta);
   						$this->db->insert('ujian_peminatan',$arrayName);
					}
			}
			//cek jumlah benar
			$this->db->select('*')
			->from('ujian_peminatan')
			->where('id_peserta',$idpeserta)
			->where_in('nilai',1);
			$hasilnya=$this->db->get();
			$cek=$hasilnya->num_rows();
			$nilai_peminatan_cek = $cek/$jumlah;
			$presentase_cek_peminatan = $this->Conversi($nilai_peminatan_cek);
			$hasilpresentase_cek_peminatan =$presentase_cek_peminatan*100;
			//cek jumlah benar kategori
			$statusSI = "Sistem Informasi";
			$statusTI = "Teknik Informatika";
			$statusMI = "Manajemen Informatika";
			$this->db->select('*')
			->from('ujian_peminatan')
			->where('id_peserta',$idpeserta)
			->where_in('kategori_soal',$statusSI);
			$jumlahperkategoriSI=$this->db->get();
			$kategoriSI=$jumlahperkategoriSI->num_rows();
			
			$this->db->select('*')
			->from('ujian_peminatan')
			->where('id_peserta',$idpeserta)
			->where_in('kategori_soal',$statusMI);
			$jumlahperkategoriMI=$this->db->get();
			$kategoriMI=$jumlahperkategoriMI->num_rows();
			
			$this->db->select('*')
			->from('ujian_peminatan')
			->where('id_peserta',$idpeserta)
			->where_in('kategori_soal',$statusTI);
			$jumlahperkategoriTI=$this->db->get();
			$kategoriTI=$jumlahperkategoriTI->num_rows();
			
			$this->db->select('*')
			->from('ujian_peminatan')
			->where('id_peserta',$idpeserta)
			->where_in('kategori_soal',$statusSI)
			->where_in('nilai',1);
			$hasilnyaSI=$this->db->get();
			$cekSI=$hasilnyaSI->num_rows();
			echo("SI->");
			echo($cekSI);
			
			$this->db->select('*')
			->from('ujian_peminatan')
			->where('id_peserta',$idpeserta)
			->where_in('kategori_soal',$statusTI)
			->where_in('nilai',1);
			$hasilnyaSI=$this->db->get();
			$cekTI=$hasilnyaSI->num_rows();
			echo "TI->";
			echo($cekTI);
			
			$this->db->select('*')
			->from('ujian_peminatan')
			->where('id_peserta',$idpeserta)
			->where_in('kategori_soal',$statusMI)
			->where_in('nilai',1);
			$hasilnyaSI=$this->db->get();
			$cekMI=$hasilnyaSI->num_rows();
			echo("MI->");
			echo($cekMI);
			//cek jumlah salah
			$salah = $jumlah-$cek;

			//echo $jumlah;
			//echo $cek;
			$hasill=0;
			$hasilahirSI = $cekSI/$kategoriSI;
			$hasilahirMI = $cekMI/$kategoriMI;
			$hasilahirTI = $cekTI/$kategoriTI;
			$hasilahir = $cek/$jumlah;
			$presentase = $this->Conversi($hasilahir);
			$hasilpresentase =$presentase*100;
			$presentaseSI = $this->Conversi($hasilahirSI);
			$hasilpresentaseSI =$presentaseSI*100;
			$presentaseMI = $this->Conversi($hasilahirMI);
			$hasilpresentaseMI =$presentaseMI*100;
			$presentaseTI = $this->Conversi($hasilahirTI);
			$hasilpresentaseTI =$presentaseTI*100;

			$this->db->where('id_peserta',$idpeserta)
			->delete('ujian_peminatan');
			//if ($hasilahir!=1) {
			//	echo $this->Conversi($hasilahir);
			//}else{
			//	echo $hasilahir;
			//
			$hasilahirpem = $hasilpresentaseTI+$hasilpresentaseSI+$hasilpresentaseMI*100;
			echo $hasilpresentase;
			echo("TI->");
			echo $hasilpresentaseTI;
			echo("SI->");
			echo $hasilpresentaseSI;
			echo("MI->");
			echo $hasilpresentaseMI;
			$status = "Done";
			$arrayHasil =array('nilai_peminatan' => $hasilpresentase_cek_peminatan,
								'nilai_TI' => $hasilpresentaseTI,
								'nilai_SI' => $hasilpresentaseSI,
								'nilai_MI' => $hasilpresentaseMI,
								
				'status'=>$status);
			$this->db->where('idmahasiswabaru_',$idpeserta)
			->update('mahasiswabaru',$arrayHasil);
	}

}