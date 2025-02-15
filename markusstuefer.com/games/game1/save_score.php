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

// Daten von der POST-Anfrage abrufen
$player_name = $_POST['player_name'];
$score = $_POST['score'];

// SQL-Abfrage zum Einfügen der Punktzahl
$sql = "INSERT INTO scores (player_name, score) VALUES ('$player_name', '$score')";

if ($conn->query($sql) === TRUE) {
    echo "Score saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
