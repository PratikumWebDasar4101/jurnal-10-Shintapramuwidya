<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<form action="prosesinput.php" method="Post">
			<a href='dasboard.html'><b>DASHBOARD</b></a><br>
			<a href='registrasi.html'><b>ADD DATA</b></a><br>
			<a href='lihatprofil.php'><b>LIHAT PROFIL</b></a><br>
			<a href='logusername.html'><b>LOGOUT</b></a><br>
			<h1><center>Form Pengguna</center></h1>

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

		<tr>
			<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>


		</form>
		</table>


</body>