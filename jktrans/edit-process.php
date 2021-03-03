<?php

include 'conn.php';
$id = $_POST['id'];
$sp = $_POST['sp'];
$colli = $_POST['colli'];
$berat = $_POST['berat'];
$franco = $_POST['franco'];
$confrankert = $_POST['confrankert'];
$penerima = $_POST['penerima'];
$keterangan = $_POST['keterangan'];
 
$sql = "UPDATE tb_rekapan SET sp='$sp', colli='$colli', berat='$berat', franco='$franco', confrankert='$confrankert', penerimaBarang='$penerima', keterangan='$keterangan' WHERE id='$id'";
$query = mysqli_query($conn, $sql);


header("location:input-data.php");

?>