<?php

$host="localhost";
$user="root";
$password="";
$db="crud";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi sudah gagal:".mysqli_connect_error());
}
?>