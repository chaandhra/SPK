    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default" style="margin-top: 100px;">
          <div class="panel-heading">  
          <?php foreach ($user as $key) {?>
            <?php echo form_open('adm/UserManagement/update/'.$key['id']); ?>
          
                <div class="form-group">
                <label>Nama Lengkap</label>
                  <input class="form-control" value="<?php echo $key['nama_lengkap'];?>" name="username" type="text">
              </div>
              <div class="form-group">
              <label>Username/E-mail</label>
                <input class="form-control" value="<?php echo $key['email'];?>" name="email" type="text">
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