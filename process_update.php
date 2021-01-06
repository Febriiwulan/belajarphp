<?php

require_once "db.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
echo '<pre>';
print_r($_POST);
echo'<pre>';

$sql = "UPDATE  mahasiswa SET nama = '".$nama."', alamat= '".$alamat."' 
WHERE nim = '".$nim."'";

if ($conn ->query($sql)){
  echo "Data sudah berhasil diupdate";
  header ('Location: index.php');
}else{
  die("Error: " . $conn->connect_error);
}

exit;
?> 