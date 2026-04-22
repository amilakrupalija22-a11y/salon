<?php
$conn = new mysqli("localhost", "root", "", "salon");

if ($conn->connect_error) {
    die("Greška: " . $conn->connect_error);
}
?>