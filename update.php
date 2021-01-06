<?php
require_once 'db.php';

$nim = $_GET['nim'];

$sql = "SELECT * FROM mahasiswa WHERE nim = '".$nim."'";

$hasil = $conn->query($sql);

$mhs = $hasil->fetch_object();

?>
<form action="proccess_update.php" method ="POST">
  NIM :<input type="text" name="nim" value="<?=$mhs->nim;?>">
  Nama :<input type="text" name="nama" value="<?=$mhs->nama;?>">
  Alamat :<input type="text" name="alamat" value="<?=$mhs->alamat;?>">
  <button type="submit">Simpan</button>
</form>