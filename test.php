<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'travel');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "✅ Connected successfully to travel database!";
?>
