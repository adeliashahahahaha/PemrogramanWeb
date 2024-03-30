<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$server = "localhost";
$username = "root";
$password = "";
$database = "praktikumwebdb";

try {
    $connect = mysqli_connect($server,$username,$password,$database);
} catch (mysqli_sql_exception $e) {
    die("Connection Failed, Here the error messages : ".$e->getMessage());
}

// echo "Connection Success";
?>


<!-- mengisi tabel sql -->
<?php
// $input = mysqli_query($connect, "INSERT INTO `user` (`username`, `password`) VALUES ('admin', MD5('admin_123'));");

// if ($input) {
//     echo "Data berhasil dimasukkan ke dalam tabel user.";
// } else {
//     echo "Error: " . mysqli_error($connect);
// }
?>
