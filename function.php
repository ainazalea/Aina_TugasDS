<?php

//membuat koneksi ke database
//inventory adalah nama database yang telah dibuat sebelumnya
$koneksi= mysqli_connect("localhost","root","","inventory");
function query($query) {

	global $koneksi;
	$result=mysqli_query($koneksi, $query);
	$rows =[];
	while ($row = mysqli_fetch_assoc ($result)) {
		$rows[]= $row;
	}
	return $rows;
}
?>
