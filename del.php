<?php
include("cont.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "DELETE FROM old WHERE id = $id";

    if (mysqli_query($cont, $sql)) {
        echo "Record deleted successfully.";
    } else {
        echo " deleting record: " . mysqli_error($cont);
    }
} else {
    echo "No id provided.";
}


header("Location: select.php");

?>
