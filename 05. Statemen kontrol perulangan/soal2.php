<!DOCTYPE html>
<html>
<head>
    <title>Kombinasi x, y, z</title>
</head>
<body>

<h2>Kombinasi Nilai x, y, z yang Memenuhi x + y + z = 25</h2>

<?php

$jumlah = 0;

for ($x = 1; $x <= 23; $x++) {     // minimal 1, maksimal 23
    for ($y = 1; $y <= 23; $y++) {
        
        $z = 25 - ($x + $y);

        if ($z >= 1) {  // bilangan asli
            echo "x = $x, y = $y, z = $z<br>";
            $jumlah++;
        }

    }
}

echo "<hr>";
echo "<h3>Jumlah Penyelesaian: $jumlah</h3>";

?>

</body>
</html>
