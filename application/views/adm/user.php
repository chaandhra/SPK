<div class="col-md-1"></div>
<div class="col-md-9">
<div class="table-responsive">
<a href="<?php echo base_url('adm/UserManagement/tambah/') ;?>"><span class="btn bg-primary"><i class="fa fa-plus" >Tambah</i></span></a>
 <table class="table dataTable" id="dataTables">
  	<thead>
	<th>Username</th>
	<th>E-mail</th>
	<th>Aksi</th>
	</thead>
	<tbody>
	<?php foreach ($user as $key) { ?>
	<tr>
 	 <td><?php echo $key['email']; ?></td>
 	 <td><?php echo $key['nama_lengkap']; ?></td>
 	 <td>  
        <a href="<?php echo base_url('adm/UserManagement/lihat/'.$key['id']) ;?>"><i class="fa fa-eye" ></i></a>    
        <a href="<?php echo base_url('adm/UserManagement/hapus/'.$key['id']); ?>"><i class="fa fa-trash" ></i></a>
     </td> 
	</tr>
	<?php } ?>
	</tbody>
  </table>
</div>
</div>