<?php
$connect = mysqli_connect("localhost", "root", "", "db_companyprofile_nazril");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>  