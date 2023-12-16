<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
 header("Location: login.php");
}
//memanggil file function untuk koneksi
include 'function.php';
//ambil data dari tabel yang telah dibuat sebelumnya
//nama tabel database hanya contoh
$ambil = query("SELECT * FROM inventory_divisi");
?>
