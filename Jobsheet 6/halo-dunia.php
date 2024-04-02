<?php
$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan eror apabila key kosong
$usia = @$_GET['usia'];

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>