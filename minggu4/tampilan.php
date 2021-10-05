<html>
    <head>
        <title>Data Hasil Akhir</title>
</head>
<body>

<?php
$nama_lengkap=$_POST["nama_lengkap"];
$nim=$_POST["nim"];
$alamat=$_POST["alamat"];
$kecamatan=$_POST["kecamatan"];
$tempat_lahir=$_POST["tempat_lahir"];
$no_telepon=$_POST["telepon"];
$email=$_POST["email"];
$hobi=$_POST["hobi"];
?>

<table border="1">
    <tr>
        <td colspan="2" align="center"><b>
            Data Hasil Akhir</b>
        </td>
    </tr>

<tr>
    <td>Nama lengkap :</td>
    <td> <?php echo $nama_lengkap; ?> </td>
</tr>

<tr>
    <td>NIM :</td>
    <td> <?php echo $nim; ?> </td>
</tr>

<tr>
    <td>Alamatp :</td>
    <td> <?php echo $alamat; ?> </td>
</tr>

<tr>
    <td>Kecamatan :</td>
    <td> <?php echo $kecamatan; ?> </td>
</tr>

<tr>
    <td>Tempat lahir :</td>
    <td> <?php echo $tempat_lahir; ?> </td>
</tr>

<tr>
    <td>No telepon :</td>
    <td> <?php echo $telepon; ?> </td>
</tr>

<tr>
    <td>Email :</td>
    <td> <?php echo $email; ?> </td>
</tr>

<tr>
    <td>Hobi :</td>
    <td> <?php echo $hobi; ?> </td>
</tr>

</table>
</body>
</html>