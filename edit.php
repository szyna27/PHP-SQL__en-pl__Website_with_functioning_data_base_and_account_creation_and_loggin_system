<?php

if(isset($_POST['notatka'])){
    $n = $_POST['notatka'];
    session_start();
    $id = $_SESSION['edit'];

    require("connect.php");

    $query = "UPDATE notes SET notatka='$n' WHERE id='$id'";
    $result = mysqli_query($connect, $query);
    if($result){
        header("Location:index.php");
        exit();
    }
    
}

if(isset($_GET['id'])){
    require("connect.php");
    $id = $_GET['id'];

    session_start();
    $_SESSION['edit'] = $id;

    $query = "SELECT notatka FROM notes WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if($result){
        $row = mysqli_fetch_assoc($result);
        $n = $row['notatka'];

?>

    <form action="" method="post">
        Notatka: <br>
        <textarea name="notatka"><?php echo $n; ?></textarea> <br>
        <input type="submit" value="Zapisz zmiany">
    </form>

<?php
    }
}


?>