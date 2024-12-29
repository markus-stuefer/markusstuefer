<?php
$servername = "localhost";
$username = "gamescores";
$password = "Mirzocker";
$dbname = "gamescores";

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung prüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL-Abfrage zum Abrufen der Top-5-Punktzahlen
$sql = "SELECT player_name, score FROM scores ORDER BY score DESC LIMIT 5";
$result = $conn->query($sql);

$scores = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $scores[] = $row;
    }
}

echo json_encode($scores);

$conn->close();
?>
