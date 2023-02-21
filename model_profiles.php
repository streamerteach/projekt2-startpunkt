<?php
$sql = "SELECT * FROM profiles";
$stmt = $conn->query($sql);
print($stmt->num_rows);

// ToDo: Kör SQL kod på databasen