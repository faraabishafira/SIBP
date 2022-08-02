<?php
require 'functions.php';

$cont = mysqli_connect("localhost", "root", "", "sibp");

if(isset($_POST["submit"])) {

  $nis = $_POST["nis"];
  $nama = $_POST["nama"];
  $asrama = $_POST["asrama"];
  $scoreawal = $_POST["score_awal"];
  $scoreakhir = $_POST["score_akhir"];
  $jumlah = $_POST["jumlah"];

  $query = "INSERT INTO data_santri 
              VALUES
  ('$nis','$nama','$asrama','$scoreawal','$scoreakhir','$jumlah')";
  mysqli_query($cont, $query);
//cek keberasilan
  if(mysqli_affected_rows($cont) > 0) {
    echo "berhasil";
  }
}
?>

<h3>TAMBAH DATA</h3>

<div class="row text-center mb-3">
<form action="" method="post">
  <ul>
    <li>
        <label for="nis">nis</label>
        <input type="text" name="nis" id="nis">
    </li>
    <li>
        <label for="name">nama</label>
        <input type="text" name="nama" id="nama">
    </li>
    <li>
        <label for="asrama">asrama</label>
        <input type="text" name="asrama" id="asrama">
    </li>
    <li>
        <label for="score awal">score awal</label>
        <input type="text"name="score awal" id="score awal">
    </li>
    <li>
        <label for="score akhir">score akhir</label>
        <input type="text"name="score akhir" id="score akhir">
    </li>
    <li>
        <label for="jumlah">jumlah</label>
        <input type="text"name="jumlah" id="jumlah">
</li>

<button type="submit" value=" Simpan" name="submit" >simpan</button>
    
  </ul>
</form>
</div>

