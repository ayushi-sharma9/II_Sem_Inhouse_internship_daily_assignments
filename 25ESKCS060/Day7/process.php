<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: basic.php");
    exit();
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone_number = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$hobby = $_POST['hobby1'];
$department = $_POST['department'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

/* New Fields */
$courses = $_POST['courses'];
$address = $_POST['address'];

$photo = "";
if(isset($_FILES['photo'])){
    $photo = $_FILES['photo']['name'];
}

/* Validation */

$errors = [];

if(!preg_match("/^[a-zA-Z ]+$/",$name)){
    $errors[] = "Name should contain only letters.";
}

if(strlen(trim($address)) < 10){
    $errors[] = "Address must be at least 10 characters.";
}

if(empty($gender)){
    $errors[] = "Please select gender.";
}

if(!empty($errors)){
    echo "<div style='background:#f8d7da;padding:15px;border:1px solid red;'>";
    foreach($errors as $error){
        echo "<p>$error</p>";
    }
    echo "</div>";
    exit();
}

$sql = "INSERT INTO students
(name,email,phone,gender,dob,hobby,department,courses,address,photo,password)
VALUES
('$name','$email','$phone_number','$gender','$dob','$hobby','$department','$courses','$address','$photo','$password')";

if (mysqli_query ( $conn,$sql )) {
    echo "<h2>Registration Successful</h2>";
}else{
    die("SQL Error: " . mysqli_error($conn));
}