    <div class="row">
		<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-primary" style="margin-top: 100px;">
			  	<div class="panel-heading">
			    	<?php echo form_open('adm/Databanksoal/tambahkan'); ?>
                    <div class="form-group">
			    			<select name="nama_peminatan" class="form-control">
			    			<?php foreach ($peminatan as $key) {?>
			    			<option value="<?php echo $key['nama_peminatan'];?>"><?php echo $key['nama_peminatan'];?></option>
			    			<?php } ?>
			    			</select>
			    		</div>

			    		<div class="form-group">
			    			<input class="form-control" placeholder="pertanyaan" name="pertanyaan" type="text">
			    		</div>
			    		</div>
			    		<div class="panel-body">
			    		<div class="form-group">
			    		<label>A. </label>
			    		    <input class="form-control" placeholder="Jawaban" name="j_a" type="text">
			    		</div>
			    		
			    		<div class="form-group">
			    		<label>B. </label>
			    			<input class="form-control" placeholder="Jawaban" name="j_b" type="text">
			    		</div>
			    		
			    		<div class="form-group">
			    		<label>C. </label>
			    			<input class="form-control" placeholder="Jawaban" name="j_c" type="text">
			    		</div>
			    		
			    		<div class="form-group">
			    		<label>D. </label>
			    			<input class="form-control" placeholder="Jawaban" name="j_d" type="text">
			    		</div>
			    		<div class="form-group">
			    			<select name="jawaban_benar" class="form-control">
			    				<option value="A">A</option>
			    				<option value="B">B</option>
			    				<option value="C">C</option>
			    				<option value="D">D</option>
			    			</select>
			    		</div>
			    		
			    		<input class="btn btn-sm btn-primary btn-block" type="submit" value="Simpan">
			    	
			      	<?php echo form_close(); ?>
			    </div>
			</div>
		</div>
	</div>