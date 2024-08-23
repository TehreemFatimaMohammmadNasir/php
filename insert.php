<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #4682B4;
            padding: 0 10px;
        }
        .container {
            border: 2px solid black;
            max-width: 500px;
            width: 100%;
            background-color: white;
            margin: 20px auto;
            padding: 30px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
        }
        .container .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #4682B4;
            text-align: center;
        }
        .container .form {
            width: 100%;
        }
        .container .form .input_field {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        .container .form .input_field label {
            width: 200px;
            margin-right: 10px;
            font-size: 14px;
        }
        .container .form .input_field .input,
        .container .form .input_field .textarea {
            width: 100%;
            outline: none;
            border: 1px solid #4682B4;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.5s ease;
        }
        .container .form .input_field select {
            width: 100%;
            height: 40px;
            border: 1px solid #4682B4;
            font-size: 15px;
            padding: 8px 10px;
            border-radius: 3px;
            transition: all 0.5s ease;
            -webkit-appearance: none;
            appearance: none;
        }
        .container .form .input_field .btn {
            background-color: #4682B4;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 15px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST">
            <div class="title">
                REGISTRATION FORM
            </div>
            <div class="form">
                <div class="input_field">
                    <label>fullname</label>
                    <input type="text" class="input" name="firstname">
                </div>
                <div class="input_field">
                    <label>Email</label>
                    <input type="text" class="input" name="email">
                </div>
                <div class="input_field">
                    <label>Password</label>
                    <input type="password" class="input" name="password">
                </div>
                <div class="input_field">
                    <label>Confirm Password</label>
                    <input type="password" class="input" name="confirmpassword">
                </div>
                <div class="input_field">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="not selected">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="input_field">
                    <label>Dateofbirth</label>
                    <input type="date" class="input" name="dateofbirth">
                </div>
                <div class="input_field">
                    <label>Phone</label>
                    <input type="text" class="input" name="phone">
                </div>
                <div class="input_field">
                    <label>Address</label>
                    <textarea class="textarea" name="address"></textarea>
                </div>
                <div class="input_field">
                    <input type="submit" value="Submit" class="btn" name="submit">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
include("cont.php");
if (isset($_POST['submit'])) {
    $fname = $_POST['fullname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $cpwd = $_POST['confirmpassword'];
    $gender = $_POST['gender'];
    $dob=$_POST['dateofbirth'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    if ($pwd === $cpwd) { 
        $sql = "INSERT INTO `old`( `fullname`, `email`, `password`, `confirmpassword`, `gender`, `dateofbirth`, `phone`, `address`) VALUES ('$fname','$email','$pwd','$cpwd','$gender','$dob','$phone','$address')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            echo "Data inserted successfully";
        } else {
            echo "Data insertion failed: " . mysqli_error($conn);
        }
    } else {
        echo "Passwords do not match!";
    }
}
?>