<?php
$SERVER = "localhost";
$user = "root";
$password="";
$nama_database="kerja projek";
$db=mysqli_connect($server, $user, $password, $nama_database);
if(!$db){
    die("Gagal terhubung dengan database: ".mysqli_connect_error());
}
?>