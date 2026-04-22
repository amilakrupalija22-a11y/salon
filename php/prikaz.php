<?php
include "konekcija.php";

$sql = "SELECT rezervacije.id, datum, vrijeme, usluge.naziv 
FROM rezervacije
JOIN usluge ON rezervacije.usluga_id = usluge.id";

$result = $conn->query($sql);

$data = [];

while($row = $result->fetch_assoc()){
    $data[] = $row;
}

echo json_encode($data);
?>
