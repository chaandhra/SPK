
<?php foreach ($mahasiswabaru as $key) { ?>
<div class="container">
<div class="col-lg-12 row">
  <div class="alert alert-warning col-md-5">
      <table class="table table-bordered" style="margin-bottom: 0px">
        
        <tr>

        <td>Id Peserta</td><td><?php echo $key['idmahasiswabaru_']; ?></td>
        </tr>
        <tr>
        <td width="30%">Nama Peserta</td>
        <td width="70%"><?php echo $key['nama_mahasiswabaru']; ?>
        </td>
        </tr>
        <tr><td>Asal Sekolah</td><td><?php echo $key['asal_sekolah']; ?></td>
        </tr>
      </table>
  </div>
  <div class="col-md-2"></div>
  
  <div class="alert alert-warning col-md-5">
      <table class="table table-bordered" style="margin-bottom: 0px">
        <tr>
        <td width="30%">Nama Ujian</td>
        <td width="70%">Psikotes</td>
        </tr>
        <tr>
        <td>Jumlah Soal</td>
        <td></td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        </tr>
      </table>
  </div>
</div>

<div class="col-lg-12 row">
  <div class="alert alert-default col-md-12">
      <table class="table borderless" style="">
     <?php echo form_open('CMhs/Ujian/hasil_pisikotes/'.$key['idmahasiswabaru_']); ?>
      <tbody>

        <?php $no=0; foreach ($Soal as $keysoal) {$no++; ?>
        <input type="text"  hidden="" name="<?php echo $no;?>"  >
        <input type="text"  hidden="" name="<?php echo "nosoal[]";?>" value="<?php echo $keysoal['idsoal'];?>">
        <tr>
        <td><?php echo $no; echo ".  "; echo $keysoal['pertanyaan'];?></td>
        <td></td>
        </tr>
        <tr>
        <td>A. <?php echo $keysoal['jawaban_a'];?></td>
        <td>B. <?php echo $keysoal['jawaban_b'];?></td>
        </tr>
        <tr>
        <td>C. <?php echo $keysoal['jawaban_c'];?></td>
        <td>D. <?php echo $keysoal['jawaban_d'];?></td>
        </tr>
        <tr>
          <td>
          <label>Jawab:</label>
            <select class="form-control" name="<?php echo "jawaban_user[]";?>">
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
			  <option value="D">D</option>
            </select>
          </td>
        </tr><?php } ?>
        </tbody>
        <tfoot>
        <tr>
        <td></td>
          <td>
            <input class="btn btn-success btn-block" type="submit" value="Selesai"> 
          </td>
        </tr>
       
        </tfoot>
        
              <?php echo form_close(); ?>
      </table>
  </div>
</div>
</div>
<?php } ?>
