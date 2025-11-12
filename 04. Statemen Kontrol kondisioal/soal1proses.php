<html>
<head>
    <title>Hasil Cek Tahun Kabisat</title>
</head>
<body>
    <h2>Hasil Pengecekan</h2>

    <?php
    if (isset($_POST['tahun'])) {
        $tahun = $_POST['tahun'];

        // Logika untuk menentukan tahun kabisat
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p><b>$tahun</b> adalah tahun kabisat ✅</p>";
        } else {
            echo "<p><b>$tahun</b> bukan tahun kabisat ❌</p>";
        }
    } else {
        echo "<p>Silakan masukkan tahun terlebih dahulu melalui form.</p>";
    }
    ?>

    <br>
    <a href="soal1.html">← Kembali ke Form</a>
</body>
</html>
