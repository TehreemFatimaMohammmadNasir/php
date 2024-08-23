<?php
$conn = mysqli_connect("localhost", "root", "", "new1");

if ($conn) {
    echo "Database connected";
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>