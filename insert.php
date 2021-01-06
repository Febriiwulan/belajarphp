<?php

require_once "db.php";

$NIM = $_POST['nim'];
$Nama = $_POST['nama'];
$Alamat = $_POST['alamat'];

$sql = "INSERT INTO mahasiswa (nim, nama, alamat)
        VALUES ('".$nim."','".$Nama."','".$Alamat."')"; 


if($conn->query($sql)){
    echo "Data sudah berhasil ditambahkan";
}
else
{
    die("Error: " . $conn->connect_error);
}



exit; 
