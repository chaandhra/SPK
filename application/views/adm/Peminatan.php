<div class="col-md-1"></div>
<div class="col-md-9">
<div class="dataTable">
<!--<a href="<?php echo base_url('adm/Dashboard/tambah_p/') ;?>"><i class="fa fa-plus" >Tambah</i></a>-->
  <table class="table dataTable" id="dataTables">
  	<thead>
	<th>No</th>
	<th>Kategori</th>
	<th>Jumlah Peminat</th>
	</thead>
	<tbody>
	<?php foreach ($minat as $key) { ?>
	<tr>
 	 <td><?php echo $key['idpeminatan']; ?></td>
 	 <td><?php echo $key['nama_peminatan']; ?></td>

 	 <td>
 	 	<?php foreach ($minatcount as $minatc) {
 	 	 if ($minatc['minat']==$key['nama_peminatan']) {
 	 	 		echo $minatc['total'];
 	 	 }
 	 	 }?>
 	 </td>
 	 <!-- <td>  
        <a href="<?php echo base_url('adm/Dashboard/lihat_p/'.$key['idpeminatan']) ;?>"><i class="fa fa-check" ></i></a>    
        <a href="<?php echo base_url('adm/Dashboard/hapus_p/'.$key['idpeminatan']); ?>"><i class="fa fa-trash" ></i></a>
     </td>-->
	</tr>
	<?php } ?>
	</tbody>
  </table>
</div>
</div>