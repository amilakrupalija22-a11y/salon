<?php
include "konekcija.php";

$korisnik = $_POST['korisnik_id'];
$usluga = $_POST['usluga_id'];
$datum = $_POST['datum'];
$vrijeme = $_POST['vrijeme'];

$sql = "INSERT INTO rezervacije (korisnik_id, usluga_id, datum, vrijeme)
VALUES ('$korisnik', '$usluga', '$datum', '$vrijeme')";

$conn->query($sql);
?>