<?php
$servername="localhost";
$username="root";
$password="";
$db="uploading";
$con=mysqli_connect($servername,$username,$password,$db);
if(!$con){
    die("connection failed".mysqli_connect_error());
}
if (isset($_FILES["files"])) {
    $name=$_FILES["files"]["name"];
    $tmpname=$_FILES["files"]["tmp_name"];
    $type=$_FILES["files"]["type"];
    $size=$_FILES["files"]["size"];
    $path=$_FILES["files"]["full_path"];
    
} 
$upload=move_uploaded_file($tmpname,"images/".$name);
if($upload){
    $sqlinsert="INSERT INTO `file`(`id`, `name`, `tmpname`, `type`, `size`, `path`) VALUES ('$name','$tmpname','$type','$size','$path')";
    $res=mysqli_query($con,$sqlinsert);
    if($res){
        echo"uploaded";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="uf">FILE UPLOADING</label>
        <input type="file" name="files" id="uf">
        <input type="file" name="images"><br><br>
        <input type="submit" name="submit"><br><br>
    </form>
</body>
</html>




