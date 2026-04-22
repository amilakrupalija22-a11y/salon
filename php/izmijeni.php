<?php
include "konekcija.php";

$id = $_POST['id'];
$datum = $_POST['datum'];
$vrijeme = $_POST['vrijeme'];

$conn->query("UPDATE rezervacije SET datum='$datum', vrijeme='$vrijeme' WHERE id=$id");
?>
