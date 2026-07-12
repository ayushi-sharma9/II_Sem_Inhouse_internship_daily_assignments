<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="basic.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION</title>
</head>
<body>

    <div class="container">

</div>
    
        <form action="process.php" method="POST" enctype="multipart/form-data">
            
        <h1>Registration Form</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="phone">Phone Number:</label>
    <input type="tel" id="phone" name="phone" required><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" id="male" name="gender" value="male" required>
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female" required>
    <label for="female">Female</label><br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required><br><br>

    <label for="hobby">Hobbies:</label>
    <input type="text" id="hobby1" name="hobby1" placeholder="Hobby" required><br><br>

    <label for="departmant">Department:</label>
    <select id="department" name="department" required>
        <option value="">Select Department</option>
        <option value="cse">Computer Science</option>
        <option value="ece">Electronics</option>
        <option value="mech">Mechanical</option>
        <option value="civil">Civil</option>
    </select><br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
<label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

<label for="course">Course:</label>
<select id="course" name="course" required>
    <option value="">Select Course</option>
    <option value="B.Tech">B.Tech</option>
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="B.Sc">B.Sc</option>
</select>

<br><br>

<label for="address">Address:</label><br>
<textarea id="address" name="address" rows="4" cols="40" placeholder="Enter your address" required></textarea>

<br><br>

<label for="photo">Profile Photo:</label>
<input type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png">

<br><br>

<img id="preview" src="" width="120"
style="display:none;border-radius:10px;">

<script>
document.getElementById("photo").addEventListener("change", function(e){
    const file = e.target.files[0];
    if(file){
        document.getElementById("preview").src =
        URL.createObjectURL(file);
        document.getElementById("preview").style.display="block";
    }
});
</script>

<br><br>

    <input type="submit" value="Register">
</form>
</div>
</body>
</html>