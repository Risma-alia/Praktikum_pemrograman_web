<html>
<head>
  <title>Hasil Perhitungan Saldo Akhir</title>
</head>
<body>
  <h2>Hasil Perhitungan Saldo Akhir</h2>

  <?php
  // Ambil data dari form
  $saldo_awal = $_POST['saldo_awal'];
  $bunga = $_POST['bunga'] / 100; // ubah ke bentuk desimal
  $bulan = $_POST['bulan'];

  // Rumus bunga majemuk: Saldo akhir = saldo_awal * (1 + bunga)^bulan
  $saldo_akhir = $saldo_awal * pow((1 + $bunga), $bulan);

  // Format hasil agar mudah dibaca
  echo "Saldo Awal: Rp " . number_format($saldo_awal, 2, ',', '.') . "<br>";
  echo "Bunga per Bulan: " . ($_POST['bunga']) . "%<br>";
  echo "Lama Menabung: $bulan bulan<br><br>";

  echo "<strong>Saldo Akhir: Rp " . number_format($saldo_akhir, 2, ',', '.') . "</strong>";
  ?>
</body>
</html>