<?php
function antiinjection($koneksi, $data)
{
    // Melakukan pembersihan input dari karakter khusus
    $filter_sql = mysqli_real_escape_string($koneksi, $data);
    return $filter_sql;
}
?>
