<?php

require_once "db.php";

$nim = $_GET['nim'];
$nama = $_GET['Nama'];
$alamat = $_GET['Alamat'];

$sql="DELETE FROM mahasiswa WHERE nama= '".$nama."', alamat= '".$alamat."', nim = '".$nim."'";


if ($conn ->query($sql)){
  echo "Data sudah berhasil didelete";
  header('Location: index.php');

}else{
  die("Error: " . $conn ->error);
}

exit;