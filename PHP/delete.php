<?php
    require_once "db_connect.php";

    $id = $_GET["id"];
    
    $sql = "DELETE FROM media WHERE isbn_code = $id";
    
    if(mysqli_query($connect, $sql)){
        header("location: index.php");
    }
    else{
        echo "Error";
    }
?>