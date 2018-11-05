<?php
	$nim=1;
	foreach($db->tampil_data() as $x){
	?>
	<tr>
		<td><?php echo $nim++; ?></td>
		<td><?php echo $x['nama_depan']; ?></td>
		<td><?php echo $x['nama_belakang']; ?></td>
		<td><?php echo $x['nim']; ?></td>
		<td><?php echo $x['kelas']; ?></td>
		<td><?php echo $x['hobi']; ?></td>
		<td><?php echo $x['genre_film']; ?></td>
		<td><?php echo $x['tempat_wisata']; ?></td>
		<td><?php echo $x['tanggal_lahir']; ?></td>

		<td>
			<a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
?>
	