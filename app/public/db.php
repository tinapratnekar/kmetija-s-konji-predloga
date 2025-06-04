<?php
$host = "mysql";
$user = "root";
$password = "";
$database = "konjeniski_center";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Povezava ni uspela: " . $conn->connect_error);
}
?>
