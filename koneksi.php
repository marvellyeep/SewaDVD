<?php
$mysqli = mysqli_connect("localhost","root","","sewadvd2");

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

///$select = $mysqli->query("INSERT INTO `film` (`ID_FILM`, `ID_KATEGORI`, `ID_JENIS`, `JUDUL_FILM`, `TAHUN_FILM`, `HARGA_FILM`, `STATUS_FILM`, `JUMLAH_KALI_DIPINJAM`) VALUES ('FI001', 'KA001', 'JE002', 'Walking Dead', '2012', '2000', '1', '0'), ('FI002', 'KA002', 'JE002', 'Mr Bean''s Holiday', '2010', '3000', '1', '0');");
/*while($row = mysqli_fetch_array($select))
  {
	  $judul = $row['JUDUL_FILM'];
    echo $judul;
  }*/
?>