    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default" style="margin-top: 100px;">
          <div class="panel-heading">  
          <?php foreach ($admin as $key) {?>
            <?php echo form_open('adm/UserManagement/update_a/'.$key['id_adm']); ?>
          
                <div class="form-group">
                <label>Username</label>
                  <input class="form-control" value="<?php echo $key['username'];?>" name="username" type="text">
              </div>
              <div class="form-group">
              <label>Nama</label>
                <input class="form-control" value="<?php echo $key['nama'];?>" name="nama" type="text">
              </div>              
              <div class="form-group">
              <label>Password</label>
                <input class="form-control" type="password" value="" name="password" type="text">
              </div>
              
              
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Simpan">
            <?php } ?>
              <?php echo form_close(); ?>
          </div>
      </div>
    </div>
  </div>