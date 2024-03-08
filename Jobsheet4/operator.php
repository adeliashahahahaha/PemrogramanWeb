<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a: $a <br>";
echo "Nilai b: $b <br><br>";

echo "Hasil Penjumlahan a + b: $hasilTambah <br>";
echo "Hasil Pengurangan a - b: $hasilKurang <br>";
echo "Hasil Perkalian a * b: $hasilKali <br>";
echo "Hasil Pembagian a / b: $hasilBagi <br>";
echo "Sisa Bagi a % b: $sisaBagi <br>";
echo "Hasil Pangkat a ** b: $pangkat <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil sama a == b: $hasilSama <br>";
echo "Hasil tidak sama a != b: $hasilTidakSama <br>";
echo "Hasil lebih kecil a > b: $hasilLebihKecil <br>";
echo "Hasil lebih besar a < b: $hasilLebihBesar <br>";
echo "Sisa lebih kecil sama a >= b: $hasilLebihKecilSama <br>";
echo "Hasil lebih besar sama a <= b: $hasilLebihBesarSama <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And a && b: $hasilAnd <br>";
echo "Hasil Or a || b: $hasilOr <br>";
echo "Hasil not A !a: $hasilNotA <br>";
echo "Hasil nto B !b: $hasilNotB <br><br>";

$hasilPenambahan = $a += $b;
$hasilPengurangan = $a -= $b;
$hasilDikali = $a *= $b;
$hasilDibagi = $a /= $b;
$hasilModulo = $a %= $b;

echo "Operator assignment <br>";
echo "Hasil a += b: $hasilPenambahan <br>";
echo "Hasil a -= b: $hasilPengurangan <br>";
echo "Hasil a *= b: $hasilDikali <br>";
echo "Hasil a /= b: $hasilDibagi <br>";
echo "Hasil a %= b: $hasilModulo <br><br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik <br>";
echo "Hasil a === b: $hasilIdentik <br>";
echo "Hasil a !=== b: $hasilTidakIdentik <br><br>";

echo "Soal no 3.6 <br>";
$jumlahTotalKursi = 45;
$jumlahKursiDitempati = 28;
$jumlahKursiKosong = $jumlahTotalKursi - $jumlahKursiDitempati;
$persentaseKursiKosong = ($jumlahKursiKosong / $jumlahTotalKursi) * 100;

echo "Jumlah kursi yang masih kosong: $jumlahKursiKosong dari $jumlahTotalKursi kursi.<br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentaseKursiKosong, 2) . "%.";

?>