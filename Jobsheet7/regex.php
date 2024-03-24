<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
$text = 'This is a Sample Text.';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!";
} else {
    echo "<br>Tidak ada huruf kecil!";
}

echo "<br><br>";

$pattern = '/[0-9]+/';
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}

echo "<br><br>";

$pattern = '/apple/';
$replacement = 'banana';
$text = '<br> I Like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text; // output: "I Like banana pie."

echo "<br><br>";

$pattern = '/go?d/'; // Cocokkan "god", "good", "gooood", dll.
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br> Cocokkan: " . $matches[0];
} else {
    echo "<br> tidak ada yang cocok!";
}

echo "<br><br>";

$pattern = '/go{n,m}d/'; // cocokkan "god", "good", "gooood", dll.
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>Cocokkan: " . $matches[0];
} else {
    echo "<br>Tidak ada yang cocok!";
}
