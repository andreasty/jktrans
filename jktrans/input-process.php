<?php

 
include 'conn.php';
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];

$sql = "INSERT INTO tb_rekapan VALUES(null, '$sp', '$colli', '$berat', '$franco', '$confrankert', '$penerima', '$keterangan' )";
$query = mysqli_query($conn, $sql);

header("location:index.php");

?>