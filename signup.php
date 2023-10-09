<?php

if(isset($_POST['user_name']))
    if(!empty($_POST['user_name']) && !empty($_POST['user_login']) && !empty($_POST['user_password'])){
        
        $u = $_POST['user_name'];
        $l = $_POST['user_login'];
        $p = $_POST['user_password'];
        $p = hash('sha256', $p);

        require('connect.php');

        $query = "SELECT user_login FROM users WHERE user_login='$l'";
        $result = mysqli_query($connection, $query);

        if($result){
            if(mysqli_num_rows($result)){
                header("Location:index.php?exist=1");
                exit();
            }
        }
        else{
            header("Location:index.php?status=0");
            exit();
        }

        $query = "INSERT INTO users VALUES('', '$u', '$l', '$p')";
        $result = mysqli_query($connection, $query);

        if($result){
            header("Location:index.php?status=1");
            exit();
        }
        else{
            header("Location:index.php?status=0");
            exit();
        }
    }

?>