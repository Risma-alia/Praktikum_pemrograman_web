<?php
$angkaBln = date("n");
switch($angkaBln)
{
    case 1 : $namaBln = "januari";
        break;
    case 2 : $namaBln = "februari";
        break;
    case 3 : $namaBln = "maret";
        break;
    case 4 : $namaBln = "april";
        break;
    case 5 : $namaBln = "mei";
        break;  
    case 6 : $namaBln = "juni";
        break;
    case 7 : $namaBln = "juli";
        break;
    case 8 : $namaBln = "agustus";
        break;
    case 9 : $namaBln = "september";    
        break;
    case 10 : $namaBln = "oktober";
        break;
    case 11 : $namaBln = "november";
        break;
    case 12 : $namaBln = "desember";
        break;
}
echo "Nama bulan sekarang adalah : " . $namaBln;
?>