<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "student_management";

$conn = mysqli_connect("localhost", "root", "", "management");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>