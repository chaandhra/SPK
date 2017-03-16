    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary" style="margin-top: 100px;">
			  	<div class="panel-heading">
			    	<?php echo form_open('adm/UserManagement/tambahkan_s'); ?>

			    		<div class="form-group">
			    		<label>Nama Siswa</label>
			    		    <input class="form-control" placeholder="" name="nama_mahasiswabaru" type="text">
			    		</div>
			    	  	<div class="form-group">
			    	  	<label>Asal Sekolah</label>
			    		    <input class="form-control" placeholder="" name="asal_sekolah" type="text">
			    		</div>
						<div class="form-group">
			    	  	<label>Email</label>
			    		    <input class="form-control" placeholder="" name="username" type="text">
			    		</div><hr>
			    		<div class="form-group">
			    		<label>Nilai Matematika</label>
			    		    <input class="form-control" placeholder="" name="nilai_mtk" type="text">
			    		</div>
			    		<div class="form-group">
			    		<label>Nilai Bahasa Indonesia</label>
			    		    <input class="form-control" placeholder="" name="nilai_bahasa_indonesia" type="text">
			    		</div>
			    		<div class="form-group">
			    		<label>Nilai Bahasa Inggris</label>
			    		    <input class="form-control" placeholder="" name="nilai_bahasa_inggris" type="text">
			    		</div>

			    		<input class="btn btn-sm btn-success btn-block" type="submit" value="Simpan">
			    	
			      	<?php echo form_close(); ?>
			    </div>
			</div>
		</div>
	</div>