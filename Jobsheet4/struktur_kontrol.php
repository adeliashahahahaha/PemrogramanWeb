<?php
$nilaiNumerik = 92;
if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} else if ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} else if ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} else if ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br><br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah; $jumlahBuah <br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <br><br>";

echo "Soal cerita nomor 4.5 <br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}
echo "<br><br>";


echo "Soal cerita nomor 4.6 <br>";
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

for ($i = 0; $i < 2; $i++) {
    array_shift($nilaiSiswa);
    array_pop($nilaiSiswa);
}

$totalNilai = array_sum($nilaiSiswa);

$rataRata = $totalNilai / count($nilaiSiswa);
echo "Nilai setelah dihilangkan dua nilai terendah dan dua nilai tertinggi: " . implode(", ", $nilaiSiswa) . "<br>";
echo "Total nilai setelah dihilangkan dua nilai terendah dan dua nilai tertinggi: $totalNilai <br>";
echo "Rata-rata nilai setelah dihilangkan dua nilai terendah dan dua nilai tertinggi: $rataRata <br><br>";

echo "Soal cerita nomor 4.7 <br>";
$hargaProduk = 120000;
$batasDiskon = 100000;
$persentaseDiskon = 20;

if ($hargaProduk > $batasDiskon) {
    $diskon = $hargaProduk * ($persentaseDiskon / 100);
    $hargaSetelahDiskon = $hargaProduk - $diskon;

    echo "Harga produk sebelum diskon: Rp " . number_format($hargaProduk) . "<br>";
    echo "Diskon ($persentaseDiskon%): Rp " . number_format($diskon) . "<br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaSetelahDiskon) . "<br>";
} else {
    echo "Harga produk: Rp " . number_format($hargaProduk) . "<br>";
    echo "Anda tidak memenuhi syarat untuk mendapatkan diskon.<br>";
    echo "Harga yang harus dibayar: Rp " . number_format($hargaProduk) . "<br>";
}
echo "<br>";

echo "Soal cerita nomor 4.8 <br>";
$poin = 600;
$totalSkor = "Total skor pemain adalah: $poin";
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

echo $totalSkor . "<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>

