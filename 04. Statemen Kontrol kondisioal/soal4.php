<html>
<head>
    <title>Cek Jumlah Hari Berdasarkan Bulan</title>
</head>
<body>
    <h2>Cek Jumlah Hari di Bulan Ini</h2>

    <?php
    // Ambil angka bulan sekarang
    $bulan = date("n"); // 1–12
    $tahun = date("Y"); // tahun sekarang

    echo "<p>Bulan saat ini: <b>$bulan</b></p>";

    switch ($bulan) {
        case 1:
            $nama_bulan = "Januari";
            $hari = 31;
            break;
        case 2:
            $nama_bulan = "Februari";
            // Cek tahun kabisat untuk Februari
            if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
                $hari = 29;
            } else {
                $hari = 28;
            }
            break;
        cse 3:
            $nama_bulan = "Maret";
            $hari = 31;
            break;
        case 4:
            $nama_bulan = "April";
            $hari = 30;
            break;
        case 5:
            $nama_bulan = "Mei";
            $hari = 31;
            break;
        case 6:
            $nama_bulan = "Juni";
            $hari = 30;
            break;
        case 7:
            $nama_bulan = "Juli";
            $hari = 31;
            break;
        case 8:
            $nama_bulan = "Agustus";
            $hari = 31;
            break;
        case 9:
            $nama_bulan = "September";
            $hari = 30;
            break;
        case 10:
            $nama_bulan = "Oktober";
            $hari = 31;
            break;
        case 11:
            $nama_bulan = "November";
            $hari = 30;
            break;
        case 12:
            $nama_bulan = "Desember";
            $hari = 31;
            break;
        default:
            $nama_bulan = "Tidak diketahui";
            $hari = 0;
            break;
    }

    echo "<p>Bulan <b>$nama_bulan</b> tahun <b>$tahun</b> memiliki <b>$hari hari</b>.</p>";
    ?>
</body>
</html>
