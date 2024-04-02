<?php

$pesan = "Saya arek Suroboyo";
# ubah variabel $pesan menajdi array dengan perintah explode
echo strrev($pesan)."<br>";
# ubah setiap kata dalam array menjadi kebalikannya
$pesanPerKata = explode(" ", $pesan);
# gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
?> 