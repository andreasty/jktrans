<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="input-process.php" method="POST">
        <table>
            <tr>
                <td>SP</td>
                <td><input type="number" name="sp"></td> 
            </tr> 
            <tr>
                <td>Colli</td>
                <td><input type="number" name="colli"></td> 
            </tr> 
            <tr>
                <td>Berat</td>
                <td><input type="number" name="berat"></td> 
            </tr> 
            <tr>
                <td>Franco</td>
                <td><input type="text" name="franco"></td> 
            </tr> 
            <tr>
                <td>confrankert</td>
                <td><input type="number" name="confrankert"></td> 
            </tr> 
            <tr>
                <td>Penerima Barang</td>
                <td><input type="text" name="penerima"></td> 
            </tr> 
            <tr>
                <td>keterangan</td>
                <td><select name="keterangan" id="">
                    <option value="sudah">sudah</option>
                    <option value="belum">belum</option>
                </select></td> 
            </tr> 
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td> 
            </tr> 
        </table>
    </form>
</body>
</html>