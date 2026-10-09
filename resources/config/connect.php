<?php
$connect = mysqli_connect("localhost", "root", "", "endy_web");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>  