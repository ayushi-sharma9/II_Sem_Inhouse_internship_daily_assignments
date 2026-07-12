<?php
$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f5f5f5;
            padding:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            background:white;
        }

        th,td{
            border:1px solid #ccc;
            padding:10px;
            text-align:center;
        }

        th{
            background:#4CAF50;
            color:white;
        }

        tr:nth-child(even){
            background:#f2f2f2;
        }
    </style>
</head>
<body>

<h2>Student Records</h2>

<table>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Dob</th>
    <th>Hobby</th>
    <th>Department</th>
    <th>password</th>
    <th>Course</th>
    <th>Address</th>
    <th>Photo</th>
</tr>

<?php
while($row = $result->fetch_assoc()){
?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['gender']; ?></td>
    <td><?php echo $row['dob']; ?></td>
    <td><?php echo $row['hobby']; ?></td>
    <td><?php echo $row['department']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['courses']; ?></td>
    <td><?php echo $row['address']; ?></td>
    <td><?php echo $row['photo']; ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>