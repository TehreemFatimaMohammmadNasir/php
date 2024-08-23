<?php
include("cont.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $pwd =  $_POST['password'];
    $cpwd =  $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE users SET fullname='$fullname', email='$email', password='$pwd',confirmpassword='$cpwd', gender='$gender',dob='$dob', phone='$phone', address='$address' WHERE id='$id'";
    mysqli_query($conn, $query);

    echo "Data updated successfully!";
}


mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form method="POST">
<h1>UPDATE</h1>
<input type="text" class="input" name="fullname">
<input type="text" class="input" name="email">
<input type="password" class="input" name="password">
<input type="password" class="input" name="confirmpassword">
<select name="gender">
                        <option value="not selected">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <input type="date" class="input" name="dateofbirth">
                        <input type="text" class="input" name="phone">
                        <textarea class="textarea" name="address"></textarea>
                        <input type="submit" value="update" name="update"><br><br>
</form>
</body>
</html>