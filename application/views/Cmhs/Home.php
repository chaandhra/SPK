
<div class="">
<ul class="nav nav-tabs">

  <li role="presentation"><a href="#biodata" data-toggle="tab">Biodata</a></li>
  <li role="presentation"><a href="#hasil" data-toggle="tab">Hasil</a></li>
</ul>
<div class="tab-content">
<?php foreach ($mahasiswabaru as $key) { ?>

    <div class="tab-pane" id="biodata">
        <div class="">
      <h5>Kode Anda : <?php echo $key['idmahasiswabaru_'];?></h5>
      <div class="col-md-3">
        <table class="table">
                <tbody>
                  <tr>
                    <th>Nama</th><td>: </td><td><?php echo $key['nama_mahasiswabaru'];?></td>
                  </tr>
                  <tr>
                    <th>Asal Sekolah</th><td>: </td><td><?php echo $key['asal_sekolah'];?></td>
                  </tr>
                </tbody>
              </table>
      </div>
              
              <table class="table">
                <thead>
                  <tr>
                    <th>Nilai Ujian Matematika</th>
                    <th>Nilai Ujian Bahasa Indonesia</th>
                    <th>Nilai Ujian Bahasa Inggris</th>
                    <th>Nilai Ujian Psikotes</th>
                    <th>Nilai Ujian Peminatan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo $key['nilai_mtk'];?></td>
                    <td><?php echo $key['nilai_bindonesia'];?></td>
                    <td><?php echo $key['nilai_binggris'];?></td>
                    <td><?php if ( $key['nilai_psikotes'] !=null) {
                      echo $key['nilai_psikotes'];
                    }else{?>
                    <a href="<?php echo base_url('CMhs/Ujian/psikotes/'.$key['idmahasiswabaru_']);?>"><button type="button" class="btn btn-primary btn-sm" >Lakukan Ujian</button></a>
                      <?php };?></td>
                      <td><?php if ( $key['nilai_peminatan'] !=null) {
                      echo $key['nilai_peminatan'];
                    }else{?>
                    <a href="<?php echo base_url('CMhs/Ujian/peminatan/'.$key['idmahasiswabaru_']);?>"><button type="button" class="btn btn-primary btn-sm" >Lakukan Ujian</button></a>
                      <?php };?></td>
                  </tr>
                </tbody>
              </table>
              <a href="#"><span type="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Edit</span></a>   
                
      </div>
    </div>


    <div class="tab-pane fade in active" id="hasil">
        
<?php
//variabel jml alternatif
$jml = 3;
//variabel nama alternatif (sesuai urutan soal)
$a = array('TI','SI','MI');
//variabel jml kriteria



//variabel nama kriteria
$k = array('Matematika','Bahasa Indonesia','Bahasa Inggris','Psikotes','Peminatan');
$jk = 5;
//variabel bobot kriteria
$mtk=$key['nilai_mtk'];
$bindo=$key['nilai_bindonesia'];
$bingg=$key['nilai_binggris'];
$psikotess=$key['nilai_psikotes'];
$peminatann=$key['nilai_peminatan'];
$peminatannTI=$key['nilai_TI'];
$peminatannSI=$key['nilai_SI'];
$peminatannMI=$key['nilai_MI'];

//TI
if ($mtk >=80) {
    $mtkTI=0.75;
}elseif ($mtk >=61) {
    $mtkTI=0.5;
}elseif ($mtk >=36) {
    $mtkTI=0.25;
}else{
  $mtkTI=0;
}
if ($bindo >=76) {
    $bindoTI=0.75;
}elseif ($bindo >=51) {
    $bindoTI=0.5;
}elseif ($bindo >=26) {
    $bindoTI=0.25;
}elseif($bindo <=25) {
    $bindoTI=0;
}
if ($bingg >=80) {
    $binggTI=0.75;
}elseif ($bingg >=40) {
    $binggTI=0.5;
}elseif ($bingg >=40) {
    $binggTI=0.25;
  }else{
    $binggTI=0;
  }
//SI
if ($mtk >=75) {
    $mtkSI=0.75;
}elseif ($mtk >=51) {
    $mtkSI=0.5;
}elseif ($mtk >=26) {
    $mtkSI=0.25;
}elseif($mtk<=25) {
    $mtkSI=0;
}
if ($bindo >=81) {
    $bindoSI=0.75;
}elseif ($bindo >=51) {
    $bindoSI=0.5;
}elseif ($bindo >=26) {
    $bindoSI=0.25;
}elseif($bindo <=25) {
    $bindoSI=0;
}
if ($bingg >=76) {
    $binggSI=0.75;
}elseif ($bingg >=51) {
    $binggSI=0.5;
}elseif ($bingg >=26) {
    $binggSI=0.25;
}elseif($bingg <=25) {
    $binggSI=0;
}
//MI
if ($mtk >=80) {
    $mtkMI=0.75;
}elseif ($mtk >=51) {
    $mtkMI=0.5;
}elseif ($mtk >=26) {
    $mtkMI=0.25;
}elseif($mtk<=25) {
    $mtkMI=0;
}
if ($bindo >=76) {
    $bindoMI=0.75;
}elseif ($bindo >=51) {
    $bindoMI=0.5;
}elseif ($bindo >=26) {
    $bindoMI=0.25;
}elseif($bindo <=25) {
    $bindoMI=0;
}
if ($bingg >=79) {
    $binggMI=0.75;
}elseif ($bingg >=51) {
    $binggMI=0.5;
}elseif ($bingg >=26) {
    $binggMI=0.25;
}elseif($bingg <=25) {
    $binggMI=0;
}
if ($psikotess=$key['nilai_psikotes'] >=76) {
    $psikotess=0.75;
}elseif ($psikotess=$key['nilai_psikotes'] >=51) {
    $psikotess=0.5;
}elseif ($psikotess=$key['nilai_psikotes'] >=26) {
    $psikotess=0.25;
}elseif($psikotess=$key['nilai_psikotes'] <=25) {
    $psikotess=0;
}
if ($peminatannTI >=76) {
    $peminatannTI=0.75;
}elseif ($peminatannTI >=51) {
    $peminatannTI=0.5;
}elseif ($peminatannTI >=26) {
    $peminatannTI=0.25;
}elseif($peminatannTI <=25) {
    $peminatannTI=0;
}
if ($peminatannMI >=76) {
    $peminatannMI=0.75;
}elseif ($peminatannMI >=51) {
    $peminatannMI=0.5;
}elseif ($peminatannMI >=26) {
    $peminatannMI=0.25;
}elseif($peminatannMI <=25) {
    $peminatannMI=0;
}
if ($peminatannSI >=76) {
    $peminatannSI=0.75;
}elseif ($peminatannSI >=51) {
    $peminatannSI=0.5;
}elseif ($peminatannSI >=26) {
    $peminatannSI=0.25;
}elseif($peminatannSI <=25) {
    $peminatannSI=0;
}

//bobot penentuan
if ($peminatann >=90) {
    $bobotpeminatan=5;
}elseif ($peminatann >=75) {
    $bobotpeminatan=4;
}elseif ($peminatann >=60) {
    $bobotpeminatan=3;
}elseif($peminatann >=40) {
    $bobotpeminatan=2;
}elseif($peminatann >=10) {
    $bobotpeminatan=1;
}
elseif($peminatann <=10) {
    $bobotpeminatan=0;
}
if ($psikotess=$key['nilai_psikotes'] >=90) {
    $bobotpsikotess=5;
}elseif ($psikotess=$key['nilai_psikotes'] >=75) {
    $bobotpsikotess=4;
}elseif ($psikotess=$key['nilai_psikotes'] >=60) {
    $bobotpsikotess=3;
}elseif($psikotess=$key['nilai_psikotes'] >=40) {
    $bobotpsikotess=2;
}elseif($psikotess=$key['nilai_psikotes'] >=10) {
    $bobotpsikotess=1;
}elseif($psikotess=$key['nilai_psikotes'] <=10) {
    $bobotpsikotess=0;
}

if ($bingg >=90) {
    $bobotbingg=5;
}elseif ($bingg >=75) {
    $bobotbingg=4;
}elseif ($bingg >=60) {
    $bobotbingg=3;
}elseif($bingg >=40) {
    $bobotbingg=2;
}elseif($bingg >=10) {
    $bobotbingg=1;
}elseif($bingg <=10) {
    $bobotbingg=0;
}
if ($bindo >=90) {
    $bobotbindo=5;
}elseif ($bindo >=75) {
    $bobotbindo=4;
}elseif ($bindo >=60) {
    $bobotbindo=3;
}elseif($bindo >=40) {
    $bobotbindo=2;
}elseif($bindo >=10) {
    $bobotbindo=1;
}elseif($bindo <=10) {
    $bobotbindo=0;
}
if ($mtk >=90) {
    $bobotmtk=5;
}elseif ($mtk >=75) {
    $bobotmtk=4;
}elseif ($mtk >=60) {
    $bobotmtk=3;
}elseif($mtk >=40) {
    $bobotmtk=2;
}elseif($mtk >=10) {
    $bobotmtk=1;
}elseif($mtk <=10) {
    $bobotmtk=0;
}

$w = array($bobotmtk,$bobotbindo,$bobotbingg,$bobotpsikotess,$bobotpeminatan);
//variabel skor kriteria
$k1 = array($mtkTI,$mtkSI,$mtkMI); 
$k2 = array($bindoTI,$bindoSI,$bindoMI); 
$k3 = array($binggTI,$binggSI,$binggMI); 
if ($key['nilai_psikotes'] >=76) {
    $psikotess=0.75;
}elseif ($key['nilai_psikotes'] >=51) {
    $psikotess=0.5;
}elseif ($key['nilai_psikotes'] >=26) {
    $psikotess=0.25;
}elseif($key['nilai_psikotes'] <=25) {
    $psikotess=0;
}
$k4 = array($psikotess,$psikotess,$psikotess); 
$k5 = array($peminatannTI,$peminatannSI,$peminatannMI);

//pemasangan alternatif terhadap kriteria
$j=1;
for ($i=0; $i < $jml; $i++) {

$alt[$j][1] = $k1[$i]; //kriteria1 utk alternatif ke-i
$alt[$j][2] = $k2[$i]; //kriteria2 utk alternatif ke-i
$alt[$j][3] = $k3[$i]; //kriteria3 utk alternatif ke-i

$alt[$j][4] = $k4[$i]; //kriteria4 utk alternatif ke-i
$alt[$j][5] = $k5[$i]; //kriteria5 utk alternatif ke-i
$alt[$j][6] = $a[$i]; //nama alternatif ke-i
$j++;
}


$max[0] = max($k1); 
$max[1] = max($k2); 
$max[2] = max($k3); 
$max[3] = max($k4); 
$max[4] = max($k5); 

echo '<br><fieldset><legend><h2>Perhitungan SAW</h2></legend>';
echo '<h3>Bobot Kriteria</h3>';
echo '<table class=table>
<tr bgcolor=#337ab7>';

for ($i=0; $i < $jk; $i++){
echo "<th>$k[$i]</th>";
}
echo "</tr><tr>";
for ($i=0; $i < $jk; $i++){

echo "<td>$w[$i]</td>";
}
echo "</tr></table></br>";

echo '<h3>Hasil Normalisasi SAW</h3>';
echo '<table class=table>
<tr bgcolor=#337ab7><th>No</th><th>Nama</th>';
for ($i=0; $i < $jk; $i++){

echo "<th>$k[$i]</th>";
}
echo '</tr><tr>';

//tahap normalisasi
//dari alternatif 1 s.d 3
for ($i=1; $i <= $jml; $i++){
echo "<td>$i</td><td>".$alt[$i][6]."</td>";
//$V[$i] = 0;

// dari kriteria 1 s.d 5
for ($k=1; $k <= $jk; $k++){
$R[$i][$k] = @($alt[$i][$k]/$max[$k-1]); //formula untuk kaidah MAX
echo "<td>".round($R[$i][$k],5)."</td>"; //hasil pembulatan 5 angka dibelakan koma
}
echo '</tr>';
}
echo '</table><br>';

//tahap hitung V
for ($i=1; $i <= $jml; $i++){ //loop sebanyak alternatif
$V = 0;
for ($k=1; $k <= $jk; $k++){ //loop sebanyak kriteria
//ECHO $V."<br>";
$V = $V + $R[$i][$k]*$w[$k-1]; //hasil Vi, didapat dari jumlah perkalian antara Wj dengan Rij
//echo $V.'<br>';
}
$Vi[$i] = $V; //simpan hasil V dlm array sesuai alternatif
}

for ($i=1; $i <= $jml; $i++){
$nama[$i] = $alt[$i][6]; //menyimpan varibel nama alternatif ke single array
}

echo '<h4>Rangking Hasil Rekomendasi Jurusan</h4>';
echo '<table class=table>
<tr bgcolor=#337ab7><th>No</th><th>Nama</th><th>Nilai V</th></tr>';

//tahap pengurutan hasil
$jvi = array_combine($nama, $Vi); //menggabungkan array nama dg array Vi
//print_r($jvi);
arsort($jvi); //mengurutkan berdasarkan Vi terbesar
$n = 0;
foreach ($jvi as $x => $val){ //untuk setiap $x = nama dan $val = Vi
$n = $n+1; $vsaw=round($val,5);
echo '<tr>';
echo "<td>$n</td><td>".$x."</td>";
echo "<td>".$vsaw."</td>";
echo '</tr>';
}
echo '</table><br></fieldset>';
?>
    </div>
	 <?php } ?>
</div>
</div>








<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Biodata</h4>
      </div>
      <div class="modal-body">
      
      <h5>Kode Anda : <?php echo $key['idmahasiswabaru_'];?></h5>
       <?php echo form_open('CMhs/Home/Biodata/'.$key['idmahasiswabaru_']); ?>
                
              <div class="form-group">
              <label>Nama Siswa</label>
                  <input class="form-control" placeholder="" name="nama_mahasiswabaru" value="<?php echo $key['nama_mahasiswabaru'];?>" type="text">
              </div>
                <div class="form-group">
                <label>Asal Sekolah</label>
                  <input class="form-control" placeholder="" name="asal_sekolah" value="<?php echo $key['asal_sekolah'];?>" type="text">
              </div><hr>
              <div class="form-group">
              <label>Nilai Ujian Matematika</label>
                  <input class="form-control" placeholder="" name="nilai_mtk" type="number" max="100">
              </div>
              <div class="form-group">
              <label>Nilai Ujian Bahasa Indonesia</label>
                  <input class="form-control" placeholder="" name="nilai_bahasa_indonesia" type="number" max="100">
              </div>
              <div class="form-group">
              <label>Nilai Ujian Bahasa Inggris</label>
                  <input class="form-control" placeholder="" name="nilai_bahasa_inggris" type="number" max="100">
              </div>    
                  <button type="Submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <?php echo form_close(); ?>
                
      </div>
      <div class="modal-footer">
        

              
      </div>
    </div>
  </div>
</div>
 