<?php
$conn = new mysqli("mysql", "root", "password", "testdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
