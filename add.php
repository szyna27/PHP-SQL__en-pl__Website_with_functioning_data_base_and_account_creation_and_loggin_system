<?php

if(isset($_POST['notatka'])){

    require("connect.php");
    $n = $_POST['notatka'];

    $query = "INSERT INTO notes (notatka) VALUES ('$n')";
    $result = mysqli_query($connect, $query);

    if($result){
        header("Location:index.php");
        exit();
    }
}

?>