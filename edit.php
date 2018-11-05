<?php
include 'database.php';
$db = new database();
?>

<h3>Edit Data User</h3>
 
<form action="proses.php" method="post">
<?php
foreach($db->edit($_GET['nim']) as $d){
?>
<table>
		<tr>
				<td>Nama Depan</td>
				<td>:</td>
				<td><input type="text" name="nama_depan"></td>	
			</tr>

			<tr>
				<td>Nama Belakang</td>
				<td>:</td>
				<td><input type="text" name="nama_belakang"></td>	
			</tr>

			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="number" name="nim"></td>	
			</tr>

			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td><input type="text" name="kelas"></td>
			</tr>

			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><input type="text" name="hobi"></td>

			<tr>
				<td>Genre Film</td>
				<td>:</td>
				<td><input type="checkbox" name="genre_film[]" value="Horror">Horror</td>
				<td><input type="checkbox" name="genre
					_film[]" value="Anime">Anime</td>
				<td><input type="checkbox" name="genre_film[]" value="Action">Action</td>
				<td><input type="checkbox" name="genre_film[]" value="Drama">Drama</td>
			</tr>

			<tr>
				<td>Tempat Wisata</td>
				<td>:</td>
				<td><input type="checkbox" name="tempat_wisata[]" value="Bali">Bali</td>
				<td><input type="checkbox" name="tempat_wisata[]" value="Tanjung Selor">Tanjung Selor</td>
				<td><input type="checkbox" name="tempat_wisata[]" value="Jakarta">Jakarta</td>
				<td><input type="checkbox" name="tempat_wisata[]" value="Lombok">Lombok</td>
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
</table>
<?php 
} 
?>
</form>