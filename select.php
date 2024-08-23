<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("cont.php");
    $sql = "SELECT * FROM old";
    $re = mysqli_query($conn, $sql);

    if ($re && mysqli_num_rows($re) > 0) {
    ?>
    <table border="1px">
        <tr>
            <th>id</th>
            <th>fullname</th>
            <th>email</th>
            <th>password</th>
            <th>confirmpassword</th>
            <th>gender</th>
            <th>dateofbirth</th>
            <th>phone</th>
            <th>address</th>
            <th>Action</th>
        </tr>
        <?php
        while ($r = mysqli_fetch_assoc($re)) {
        ?>
        <tr>
            <td><?php echo $r['id']; ?></td>
            <td><?php echo $r['fullname']; ?></td>
            <td><?php echo $r['email']; ?></td>
            <td><?php echo $r['password']; ?></td>
            <td><?php echo $r['confirmpassword']; ?></td>
            <td><?php echo $r['gender']; ?></td>
            <td><?php echo $r['dateofbirth']; ?></td>
            <td><?php echo $r['phone']; ?></td>
            <td><?php echo $r['address']; ?></td>
            <td><a href="edit.php?id=<?php echo $r['id']; ?>">EDIT</a></td>
            <td><a href="del.php?id=<?php echo $r['id']; ?>">DELETE</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    } else {
        echo "No records found.";
    }
    ?>
</body>
</html>