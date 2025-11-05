<html>
<head>
  <title>Hasil Pecahan Uang</title>
</head>
<body>
  <h2>Hasil Pecahan Uang</h2>

  <?php
  // Ambil data dari form
  $jumlah = $_POST['jumlah'];

  // Daftar pecahan uang (dari besar ke kecil)
  $pecahan = [100000, 50000, 20000, 5000, 100, 50];

  echo "Jumlah Uang: Rp " . number_format($jumlah, 0, ',', '.') . "<br><br>";
  echo "<strong>Rincian Pecahan:</strong><br>";

  foreach ($pecahan as $nilai) {
      $banyak = floor($jumlah / $nilai);
      $jumlah = $jumlah % $nilai;
      echo "Rp " . number_format($nilai, 0, ',', '.') . " : " . $banyak . " lembar/keping<br>";
  }
  ?>
</body>
</html>
