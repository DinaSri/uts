<?php
include ('koneksi.php');

$nama = $_POST['nama'];
$tempat_lahir = $_POST ['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST ['jenis_kelamin'];
$agama = $_POST['agama'];
$phone = $_POST ['phone'];

$tambah ="INSERT INTO pendaftars SET nama='$nama' ,tempat_lahir='$tempat_lahir' ,tanggal_lahir='$tanggal_lahir' ,jenis_kelamin='$jenis_kelamin' , agama='$agama' ,phone='$phone'";
mysqli_query($koneksi,$tambah);
header("location:lihatdatapendaftar.php");
?>
