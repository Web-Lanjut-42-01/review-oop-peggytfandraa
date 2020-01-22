<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="1.php" method="POST">
<table>

    <tr>
        <td>Nama : </td>
        <td><input type="text" name="nama" required=""></td>
    </tr>

    <tr>
        <td>Berat Badan : </td>
        <td><input type="number" name="beratbadan" required=""> kg</td>
    </tr>

    <tr>
        <td>Tinggi Badan : </td>
        <td><input type="number" name="tinggibadan" required=""> cm</td>
    </tr>

    <tr>
        <td>Jenis Kelamin : </td>
        <td><input type="radio" name="jk" value="Laki-laki" required=""> Laki-Laki</td>
         <td><input type="radio" name="jk" value="Perempuan" required=""> Perempuan</td>
    </tr>
    </table>

    <input type="submit" name="submit">
</form>
    <?php 
    
    ?>
</body>
</html>