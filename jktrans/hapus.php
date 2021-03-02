<?php

include 'conn.php';
$id = $_GET['id'];
$sql = "DELETE FROM tb_rekapan WHERE id='$id'";
$query = mysqli_query($conn, $sql);


header("location:index.php");
?>