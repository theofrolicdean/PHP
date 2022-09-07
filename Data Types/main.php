<?php
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.8;
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;
echo "Nilai Matematika: $nilaiMatematika <br>";
echo "Nilai Bahasa Indonesia: $nilaiBahasaIndonesia <br>";
echo "Nilai IPA: $nilaiIPA <br>";
echo "Rata - Rata: $rataRata <br>";
echo "Tipe Data Rata - Rata: ";
var_dump($rataRata);
?>