<html>
<head>
  <title>Hitung Saldo Akhir Tabungan</title>
</head>
<body>
  <h2>Hitung Saldo Akhir Tabungan</h2>
  <form action="soal1 proses.php" method="post">
    <label>Saldo Awal (Rp): </label>
    <input type="number" name="saldo_awal" required><br><br>

    <label>Bunga per Bulan (%): </label>
    <input type="number" step="0.01" name="bunga" required><br><br>

    <label>Lama Menabung (bulan): </label>
    <input type="number" name="bulan" required><br><br>

    <input type="submit" value="Hitung">
    <input type="reset" value="Reset">
  </form>
</body>
</html>