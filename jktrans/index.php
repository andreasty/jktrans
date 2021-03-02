<html>
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
 <style>
 th {
     padding: 8px;
 }
 </style>
 <br/>
    <a class="tombol" href="input.php">+ Tambah Data Baru</a>
    
    <h3>Data user</h3>
    <table border="1" cellpadding='10' cellspacing="0">
        <tr>
            <th>No</th>
            <th>sp</th>
            <th>Colli</th>
            <th>Berat</th>
            <th>Franco</th>
            <th>Confrankert</th>
            <th>Penerima Barang</th>
            <th>Keterangan</th>
            <th>Opsi</th>
        </tr>

 <?php 
    include "conn.php";
 
    $sql = "SELECT * FROM tb_rekapan";
    $query = mysqli_query($conn, $sql);
    $nomor =1;
    while ($data = mysqli_fetch_array($query)) {
 ?>
    <tr>
        <td><?php echo $nomor++; ?></td>
        <td><?php echo $data['sp']; ?></td>
        <td><?php echo $data['colli']; ?></td>  
        <td><?php echo $data['berat']; ?></td>
        <td><?php echo $data['franco']; ?></td>
        <td><?php echo $data['confrankert']; ?></td>
        <td><?php echo $data['penerimaBarang']; ?></td>
        <td><?php echo $data['keterangan']; ?></td>
        <td>
            <a class="edit" href="edit.php?id= <?php echo $data['id']; ?>">Edit</a> |
            <a class="hapus" href="hapus.php?id=<?php  echo $data['id']; ?>">Hapus</a> 
        </td>
    </tr>
  
<?php
  } ?>
 </table>
</body>
</html>