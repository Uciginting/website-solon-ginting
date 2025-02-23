<?php
include 'db.php';

if (issert($_GET['id'])) {
	$id = $_GET['id'];

	$query = "DELETE FROM produk WHERE id =$id";
	if (mysql_query($conn, $query)) {
		header('location: index.php');
	} else {
		echo "Gagal menghapus data: " . mysql_error($conn);
<0xa0><0xa0><0axa0><0xa0>}
	}
?>
