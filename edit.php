<?php
include("cont.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    
    $sql = "SELECT * FROM old WHERE id = $id";
    $result = mysqli_query($cont, $sql);
    $record = mysqli_fetch_assoc($result);

    if ($record) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <h2>Edit Record</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $record['id']; ?>">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" value="<?php echo $record['fullname']; ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $record['email']; ?>"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $record['password']; ?>"><br>

        <label for="confirmpassword">Confirm Password:</label>
        <input type="password" name="confirmpassword" value="<?php echo $record['confirmpassword']; ?>"><br>

        <label for="gender">Gender:</label>
        <input type="text" name="gender" value="<?php echo $record['gender']; ?>"><br>

        <label for="dateofbirth">Date of Birth:</label>
        <input type="date" name="dateofbirth" value="<?php echo $record['dateofbirth']; ?>"><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo $record['phone']; ?>"><br>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $record['address']; ?>"><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
<?php
    } else {
        echo "Record not found.";
    }
} 
?>