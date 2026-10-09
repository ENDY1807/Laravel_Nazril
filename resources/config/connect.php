<?php
$connect = mysqli_connect("localhost", "root", "", "web-endy");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>  