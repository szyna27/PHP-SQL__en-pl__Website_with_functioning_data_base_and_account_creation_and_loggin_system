<?php

if(isset($_GET['id'])){
    require("connect.php");
    $id = $_GET['id'];

    $query = "DELETE FROM notes WHERE id=$id";
    $result = mysqli_query($connect, $query);

    if($result){
        header("Location:index.php");
        exit();
    }
}

?>