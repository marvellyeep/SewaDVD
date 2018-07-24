<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_GET['id'])){
// Ambil data ID SAPI yang dikirim oleh form_ubah.php melalui URL
$id_flm = $_GET['id'];

// Ambil Data yang Dikirim dari Form
$judul = $_POST['JUDUL_FILM'];
$tahun = $_POST['TAHUN_FILM'];
$harga = $_POST['HARGA_FILM'];


	// Proses upload
		
		// Proses ubah data ke Database
		//$queryZ = "UPDATE `film` SET `JUDUL_FILM` = '".$judul."', `TAHUN_FILM` = '".$tahun."', `HARGA_FILM` = '".$harga."', WHERE `film`.`ID_FILM` = '".$id_flm."'";
		$query = "UPDATE `film` SET `JUDUL_FILM` = '".$judul."', `TAHUN_FILM` = '".$tahun."', `HARGA_FILM` = '".$harga."' WHERE `film`.`ID_FILM` = '".$id_flm."'";
		$sqlZ = $mysqli->query($query);  // Eksekusi/Jalankan query dari variabel $query
		
		
		if($sqlZ){ // Cek jika proses simpan ke database sukses atau tidak
			// Jika Sukses, Lakukan :
			header("location: dvd-list.php"); // Redirect ke halaman dvd-list.php
		}else{
			// Jika Gagal, Lakukan :
			echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
			echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
			ECHO $queryZ;
		}
}
?>