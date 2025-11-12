<html>
<head>
    <title>Hasil Perhitungan Upah</title>
</head>
<body>
    <h2>Hasil Perhitungan Upah Karyawan</h2>

    <?php
    if (isset($_POST['jam'])) {
        $jam = $_POST['jam'];
        $upah_per_jam = 2000;
        $upah_lembur = 3000;
        $batas_jam_normal = 48;

        if ($jam <= $batas_jam_normal) {
            $total_upah = $jam * $upah_per_jam;
        } else {
            $jam_lembur = $jam - $batas_jam_normal;
            $total_upah = ($batas_jam_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
        }

        echo "<p>Jumlah jam kerja: <b>$jam jam</b></p>";
        echo "<p>Total upah yang diterima: <b>Rp " . number_format($total_upah, 0, ',', '.') . "</b></p>";
    } else {
        echo "<p>Silakan masukkan jumlah jam kerja terlebih dahulu.</p>";
    }
    ?>

    <br>
    <a href="soal2.html">← Kembali ke Form</a>
</body>
</html>
