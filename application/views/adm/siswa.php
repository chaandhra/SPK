<div class="col-md-1"></div>
<div class="col-md-12">
<div class="table-responsive">

<a href="<?php echo base_url('adm/UserManagement/tambah_s/') ;?>"><span class="btn bg-primary"><i class="fa fa-plus" >Tambah</i></span></a>
  <table class="table dataTable" id="dataTables">
  	<thead>
	<th>Nama</th>
	<th>Asal Sekolah</th>
	<th>Nilai Matematika</th>
	<th>Nilai B. Indonesia</th>
	<th>Nilai B. Inggris</th>
	<th>Nilai Psikotes</th>
	<th>Aksi</th>
	</thead>
	<tbody>
	<?php foreach ($mahasiswabaru as $key) { ?>
	<tr>
 	 <td><?php echo $key['nama_mahasiswabaru']; ?></td>
 	 <td><?php echo $key['asal_sekolah']; ?></td>
 	 <td><?php echo $key['nilai_mtk']; ?></td>
 	 <td><?php echo $key['nilai_bindonesia']; ?></td>
 	 <td><?php echo $key['nilai_binggris']; ?></td>
 	 <td><?php echo $key['nilai_psikotes']; ?></td>
 	 <td>  
        <a href="<?php echo base_url('adm/UserManagement/lihat_s/'.$key['idmahasiswabaru']) ;?>"><i class="fa fa-eye" ></i></a>    
        <a href="<?php echo base_url('adm/UserManagement/hapus_s/'.$key['idmahasiswabaru']); ?>"><i class="fa fa-trash" ></i></a>
     </td> 
	</tr>
	<?php } ?>
	</tbody>
  </table>
</div>
</div>