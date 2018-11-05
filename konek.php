<?php

class koneksi {
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $db="modul8";

		function __construct(){
		$sql = mysqli_connect($this->servername, $this->username, $this->password, $this->db);
 
		if($sql){
			echo "Koneksi database mysql dan php berhasil.";
		}else{
			echo "Koneksi database mysql dan php GAGAL !";
		}
	}
		function input($nama_depan,$nama_belakang,$nim,$kelas,$hobi,$genre_film,$tempat_wisata,$tanggal_lahir){
			mysqli_query("INSERT INTO jurnal VALUES ('$nama_depan','$nama_belakang','$nim','$kelas','$hobi','$genre_film','tempat_wisata','$tanggal_lahir')");
	}	
} 
 
$koneksi = new koneksi();

?>