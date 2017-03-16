    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary" style="margin-top: 100px;">
			  	<div class="panel-heading">
			    	<?php echo form_open('adm/UserManagement/tambahkan_a'); ?>

			    		<div class="form-group">
			    		<label>nama</label>
			    		    <input class="form-control" placeholder="" name="nama" type="text">
			    		</div>
			    	  	<div class="form-group">
			    	  	<label>Username</label>
			    		    <input class="form-control" placeholder="" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    		<label>Password</label>
			    		    <input class="form-control" placeholder="" name="password" type="password">
			    		</div>
			    		<input class="btn btn-sm btn-success btn-block" type="submit" value="Simpan">
			    	
			      	<?php echo form_close(); ?>
			    </div>
			</div>
		</div>
	</div>