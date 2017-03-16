    <div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default" style="margin-top: 100px;">
          <div class="panel-heading">
          <?php foreach ($soal as $key) {?>
            <?php echo form_open('adm/Databanksoal/update/'.$key['idsoal']); ?>
            
            <input hidden="" value="<?php echo $key['idsoal'];?>"></input>
              
               
               
                
                <div class="form-group">
                <select name="nama_peminatan" class="form-control">
                <?php foreach ($peminatan as $key2) {?>
<?php
                $tru=$key['nama_peminatan'];
                $tru2=$key2['nama_peminatan'];
                ?>
                  <option <?php
                if ($tru == $tru2) {
                   echo 'selected';
                 }else {
                   
                 }
                ?>  value="<?php echo $key2['nama_peminatan'];?>">
                <?php echo $key2['nama_peminatan'];?>
                </option>
                <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <input class="form-control" value="<?php echo $key['pertanyaan'];?>" name="pertanyaan" type="text">
              </div>
              </div>
              <div class="panel-body">
              <div class="form-group">
              <label>A. </label>
                  <input class="form-control" value="<?php echo $key['jawaban_a'];?>" name="j_a" type="text">
              </div>
              
              <div class="form-group">
              <label>B. </label>
                <input class="form-control" value="<?php echo $key['jawaban_b'];?>" name="j_b" type="text">
              </div>
              
              <div class="form-group">
              <label>C. </label>
                <input class="form-control" value="<?php echo $key['jawaban_c'];?>" name="j_c" type="text">
              </div>
              
              <div class="form-group">
              <label>D. </label>
                <input class="form-control" value="<?php echo $key['jawaban_d'];?>" name="j_d" type="text">
              </div>
              <div class="form-group">
                <select name="jawaban_benar" class="form-control">

                
                  <option <?php
                $tru=$key['jawaban_benar'];
                if ($tru == 'A') {
                   echo "selected";
                 } 
                ?>  value="A">A</option>
                  <option <?php
                $tru=$key['jawaban_benar'];
                if ($tru == 'B') {
                   echo "selected";
                 } 
                ?>  value="B">B</option>
                  <option <?php
                $tru=$key['jawaban_benar'];
                if ($tru == 'C') {
                   echo "selected";
                 } 
                ?>  value="C">C</option>
                  <option <?php
                $tru=$key['jawaban_benar'];
                if ($tru == 'D') {
                   echo "selected";
                 } 
                ?>  value="D">D</option>
                </select>
              </div>
              
              <input class="btn btn-lg btn-success btn-block" type="submit" value="Simpan">
            <?php } ?>
              <?php echo form_close(); ?>
          </div>
      </div>
    </div>
  </div>