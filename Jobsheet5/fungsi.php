<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya".$nama."<br/>";
    echo "Senang berkenalan dengan Anda <br />";
}
perkenalan("Adelia","Hallo");
echo"<hr>";

$saya="Adelia";
// $ucapanSalam="Selamat pagi";

perkenalan($saya, $ucapanSalam);

echo"<hr>";

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }
function perkenalan2($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";        
    echo "Senang berkenalan dengan Anda <br />";
}
perkenalan2("Adelia");
?>

