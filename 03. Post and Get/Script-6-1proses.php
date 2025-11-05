<html>
<head>
    <title>Baca input dari form</title>
</head>
<body>
<h1>Baca Input dari form</h1>

<p>Berikut ini data yang telah anda masukkan dalam form</p>

<?php
$NamaAnda = $_POST['nama']; // membaca input dari komponen nama
$AlamatAnda = $_POST['alamat']; // membaca input dari komponen alamat
$sexAnda = $_POST['sex']; // membaca input dari komponen sex
$jobAnda = $_POST['job']; // membaca input dari komponen job
$Statusmenikah = $_POST['status']; // membaca input dari komponen status

echo "<table>";
echo "<tr><td>Nama Anda</td><td>:</td><td>".$namaAnda."</td></tr>";
echo "<tr><td>Alamat Anda</td><td>:</td><td>".$alamatAnda."</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>:</td><td>".$sexAnda."</td></tr>";
echo "<tr><td>Pekerjaan Anda</td><td>:</td><td>".$jobAnda."</td></tr>";
echo "<tr><td>Status Menikah</td><td>:</td><td>".$Statusmenikah."</td></tr>";
echo "</table>";
?>

</body>
</html>
