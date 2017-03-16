<div class="col-md-1"></div>
<div class="col-md-12">
<div class="table-responsive">

<a href="<?php echo base_url('adm/UserManagement/tambah_a/') ;?>"><span class="btn bg-primary"><i class="fa fa-plus" >Tambah</i></span></a>
  <table class="table dataTable" id="dataTables">
  	<thead>
	<th>Nama</th>
	<th>Asal Sekolah</th>
	<th>Aksi</th>
	</thead>
	<tbody>
	<?php foreach ($admin as $key) { ?>
	<tr>
 	 <td><?php echo $key['nama']; ?></td>
 	 <td><?php echo $key['username']; ?></td>
 	 <td>  
        <a href="<?php echo base_url('adm/UserManagement/lihat_a/'.$key['id_adm']) ;?>"><i class="fa fa-eye" ></i></a>    
        <a href="<?php echo base_url('adm/UserManagement/hapus_a/'.$key['id_adm']); ?>"><i class="fa fa-trash" ></i></a>
     </td> 
	</tr>
	<?php } ?>
	</tbody>
  </table>
</div>
</div>