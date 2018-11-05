<?php 

require_once 'konek.php';
$db = new koneksi();

$aksi = $_POST['nim'];
 if($aksi == "tambah"){
 	$db->input($_POST['nama_depan'],$_POST['nama_belakang'],$_POST['nim'],$_POST['kelas'],$_POST['hobi'],$_POST['genre_film'],$_POST['tempat_wisata'],$_POST['tanggal_lahir']);
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['nim']);
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['nama_depan'],$_POST['nama_belakang'],$_POST['nim'],$_POST['kelas'],$_POST['hobi'],$_POST['genre_film'],$_POST['tempat_wisata'],$_POST['tanggal_lahir']);
 	header("location:tampil.php");
 }
?>
