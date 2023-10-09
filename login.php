<?php

if(isset($_POST['user_login'])){
    
    $l = $_POST['user_login'];
    $p = $_POST['user_password'];
    $p = hash('sha256', $p);

    require('connect.php');

    $query = "SELECT * FROM users WHERE user_login='$l' AND user_password='$p'";
    $result = mysqli_query($connection, $query);

    if($result && mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION['logged_in'] = 1;
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
        header("Location:index.php");
    }
    else{
        header("Location:index.php");
    }

}
?>