<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir</title>
</head>
<body>

<h2>Hitung Saldo Akhir Tabungan</h2>

<!-- FORM INPUT -->
<form method="POST">
    Saldo Awal: <input type="number" name="saldo_awal" required> <br><br>
    Lama Menabung (bulan): <input type="number" name="bulan" required> <br><br>
    <input type="submit" value="Hitung">
</form>

<hr>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $saldo = $_POST['saldo_awal'];
    $bulan = $_POST['bulan'];

    echo "<h3>Detail Perhitungan</h3>";

    // Tabel header
    echo "<table border='1' cellpadding='8' cellspacing='0'>
            <tr>
                <th>Bulan</th>
                <th>Saldo Awal</th>
                <th>Bunga</th>
                <th>Admin</th>
                <th>Saldo Akhir</th>
            </tr>";

    for ($i = 1; $i <= $bulan; $i++) {

        $saldo_awal_bulan = $saldo;

        // Tentukan bunga sesuai saldo terakhir
        if ($saldo < 1100000) {
            $bunga = 0.03 * $saldo;   // 3%
        } else {
            $bunga = 0.04 * $saldo;   // 4%
        }

        $admin = 9000;

        // Hitung saldo akhir bulan ini
        $saldo = $saldo + $bunga - $admin;

        // Tampilkan baris tabel
        echo "<tr>
                <td>$i</td>
                <td>Rp " . number_format($saldo_awal_bulan, 0, ',', '.') . "</td>
                <td>Rp " . number_format($bunga, 0, ',', '.') . "</td>
                <td>Rp " . number_format($admin, 0, ',', '.') . "</td>
                <td>Rp " . number_format($saldo, 0, ',', '.') . "</td>
              </tr>";
    }

    echo "</table>";

    echo "<hr><h3>Saldo Akhir Setelah $bulan Bulan:</h3>";
    echo "<h2>Rp " . number_format($saldo, 0, ',', '.') . "</h2>";
}
?>

</body>
</html>
