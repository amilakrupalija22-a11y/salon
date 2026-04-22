<?php
include "konekcija.php";

$id = $_GET['id'];

$conn->query("DELETE FROM rezervacije WHERE id=$id");
?>
