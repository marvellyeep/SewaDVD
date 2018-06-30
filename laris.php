<?php
include 'koneksi.php';

$select = $mysqli->query("select * from film");
while($row = mysqli_fetch_array($select)){
	$json_array[] = array(
						'cover' => $row['COVER'], 
						'judul' => $row['JUDUL_FILM'], 
						'dipinjam' => $row['JUMLAH_KALI_DIPINJAM']
						);
}
print(json_encode($json_array));