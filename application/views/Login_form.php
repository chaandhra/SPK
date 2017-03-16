    
    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login</h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open('Login/check'); ?>
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="username" name="username" type="text" required="">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> 
			    	    		Ingat Saya
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	<?php echo form_close(); ?>
			    </div>
			</div>
		</div>
		<div class="col-md-4 col-md-offset-4"></div>
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary" style="margin-top: 0px;">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Daftar</h3>
			 	</div>
			  	<div class="panel-body">
			    	<?php echo form_open('Login/Daftar'); ?>
                    <fieldset>
			    	  	<div class="form-group">
			    	  	<label>Nama Lengkap</label>
			    		    <input class="form-control" placeholder="Nama Lengkap" name="nama_lengkap" type="text" required="">
			    		</div>
			    		<div class="form-group">
			    		<label>Asal Sekolah</label>
			    		    <input class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" type="text" required="">
			    		</div>
			    		<div class="form-group">
			    		<label>Minat Jurusan</label>
			    		    
			    			<select name="minat" class="form-control">
			    			<?php foreach ($peminatan as $key) {?>
			    			<option value="<?php echo $key['nama_peminatan'];?>"><?php echo $key['nama_peminatan'];?></option>
			    			<?php } ?>
			    			</select>
			    		
			    		</div>
			    		<div class="form-group">
			    		<label>e-Mail</label>
			    		    <input class="form-control" placeholder="E-mail" name="username" type="text" required="">
			    		</div>
			    		<div class="form-group">
			    		<label>Password</label>
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
			    		</div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Ingat Saya
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Daftar">
			    	</fieldset>
			      	<?php echo form_close(); ?>
			    </div>
			</div>
		</div>
	</div>