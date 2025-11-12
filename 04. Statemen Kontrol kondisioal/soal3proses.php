<html>
<head>
    <title>Hasil Perhitungan Upah Berdasarkan Golongan</title>
</head>
<body>
    <h2>Hasil Perhitungan Upah Karyawan</h2>

    <?php
    if (isset($_POST['jam']) && isset($_POST['golongan'])) {
        $jam = $_POST['jam'];
        $golongan = strtoupper($_POST['golongan']); // ubah ke huruf besar
        $upah_lembur = 3000;
        $batas_jam_normal = 48;

        // Tentukan upah per jam berdasarkan golongan
        switch ($golongan) {
            case 'A':
                $upah_per_jam = 4000;
                break;
            case 'B':
                $upah_per_jam = 5000;
                break;
            case 'C':
                $upah_per_jam = 6000;
                break;
            case 'D':
                $upah_per_jam = 7500;
                break;
            default:
                $upah_per_jam = 0;
                break;
        }

        // Hitung total upah
        if ($jam <= $batas_jam_normal) {
            $total_upah = $jam * $upah_per_jam;
            $jam_lembur = 0;
        } else {
            $jam_lembur = $jam - $batas_jam_normal;
            $total_upah = ($batas_jam_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
        }

        // Tampilkan hasil
        echo "<p>Golongan: <b>$golongan</b></p>";
        echo "<p>Jam kerja: <b>$jam jam</b></p>";
        echo "<p>Jam lembur: <b>$jam_lembur jam</b></p>";
        echo "<p>Total upah: <b>Rp " . number_format($total_upah, 0, ',', '.') . "</b></p>";
    } else {
        echo "<p>Silakan isi data terlebih dahulu melalui form.</p>";
    }
    ?>

    <br>
    <a href="soal3.html">← Kembali ke Form</a>
</body>
</html>
