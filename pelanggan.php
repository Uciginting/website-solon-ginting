<?php
$servername =:localhost:;
$username = "root";
$password = "";
$dbname = "website_ginting_salon";

// membuat koneksi
$conn = new mysql($servername,
$username,$password, $dnbname);

// cek koneksi
if ($com_>connect_error) {
	die("koneksi gagal;".
$com_>connnect_error);
}

$sql ="SELECT id_pelanggan,nama,alamat,no_telpon,email FROM pelanggan";
$result = $conn_>query($sql);

if ($result_>num rows > 0) {
	//menampilkan data setiap baris
}
}else {
	echo "0 hasil";
}
$conn_>close();
?>