<?php
include("koneksi.php");

$nik = $_REQUEST['nik'];
$nama = $_REQUEST['nama'];
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$telp = $_REQUEST['telp'];

$query = $db->query("INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp')");


header("Location:login.php");

?>