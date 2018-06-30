<?php
include 'koneksi.php';

if(!empty($_GET['id'])){
	$id_film = $_GET['id'];
	$delete = $mysqli->query("DELETE FROM film WHERE ID_FILM = '".$id_film."'");
	if($delete){
		echo "Data terhapus";
	} else {
		echo "Gagal menghapus data";
	}
}