<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
       include "conn.php";
       $id = $_GET['id'];
       $sql = "SELECT * FROM tb_rekapan WHERE id='$id'";
       $query = mysqli_query($conn, $sql);

       $nomor = 1;
       while ($data = mysqli_fetch_array($query)) {
       ?>
    <form action="edit-process.php" method="post"> 
    <table border="1" cellpadding='10' cellspacing="0">
            <tr>
                <td>SP</td>
                <td><input type="number" name="sp"  value="<?php echo $data['sp'] ?>"></td> 
            </tr> 
            <tr>
                <td>Colli</td>
                <td><input type="number" name="colli"  value="<?php echo $data['colli'] ?>"></td> 
            </tr> 
            <tr>
                <td>Berat</td>
                <td><input type="number" name="berat"  value="<?php echo $data['berat'] ?>"></td> 
            </tr> 
            <tr>
                <td>Franco</td>
                <td><input type="text" name="franco"  value="<?php echo $data['franco'] ?>"></td> 
            </tr> 
            <tr>
                <td>confrankert</td>
                <td><input type="number" name="confrankert"  value="<?php echo $data['confrankert'] ?>"></td> 
            </tr> 
            <tr>
                <td>Penerima Barang</td>
                <td><input type="text" name="penerima" value="<?php echo $data['penerimaBarang'] ?>"></td> 
            </tr> 
            <tr>
                <td>keterangan</td>
                <td><input type="text" name="keterangan"  value="<?php echo $data['keterangan'] ?>"></td> 
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td> 
            </tr> 
        </table>
    </form>
    <?php
    } ?>
</body>
</html>