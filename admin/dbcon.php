<?php
$servername = "sql.freedb.tech";
$username = "freedb_shin299";
$password = "W&6Up?WPVKjwVw@";
$database = "freedb_proposal";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
