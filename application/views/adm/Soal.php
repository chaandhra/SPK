<div class="col-md-1"></div>
<div class="col-md-9">
<div class="table-responsive">
<a href="<?php echo base_url('adm/Databanksoal/tambah/') ;?>"><span class="btn bg-primary"><i class="fa fa-plus" >Tambah</i></span></a>
  <table class="table dataTable" id="dataTables">
  	<thead>
	<th>No</th>
	<th>Soal</th>
	<th>Peminatan</th>

	<th></th>
	</thead>
	<tbody>
	<?php $i=1; foreach ($soal as $key) { ?>
	<tr>
 	 <td><?php echo $i++; ?></td>
 	 <td><?php echo $key['pertanyaan']; ?></td>
 	 <td><?php echo $key['nama_peminatan']; ?></td>

 	 <td>  
        <a href="<?php echo base_url('adm/Databanksoal/lihat/'.$key['idsoal']) ;?>"><i class="fa fa-eye" ></i></a>    
        <a href="<?php echo base_url('adm/Databanksoal/hapus/'.$key['idsoal']); ?>"><i class="fa fa-trash" ></i></a>
     </td> 
	</tr>
	<?php } ?>
	</tbody>
  </table>
</div>
</div>