<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Leave blank for XAMPP
$dbname = 'movie_recommendation';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
