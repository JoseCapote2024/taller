<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . " - Name: " . $row['name'] . "<br>";
        }
    } else {
        echo "No results";
    }
} else {
    echo "Provide an ID via ?id= parameter";
}
?>
