<?php
    session_start();
    require_once "./db_connect.php";
    if(isset($_POST['login'])){
        if(empty($_POST['user']) || empty($_POST['pw'])){
            header("Location:login.php?Empty= Please fill in the blanks");
        }else{
            $name = $_POST['user'];
            $pw = $_POST['pw'];
            $sql = "SELECT * FROM user WHERE userName = '$name' and password = '$pw'";
            $result = mysqli_query($connection, $sql);
            if(mysqli_fetch_assoc($result)) {
                $_SESSION['User'] = $_POST['user'];
                header("Location:addblog.php");
            }else{
                header("Location:login.php?Invalid= Incorrect username or password");
            }
        }
    }
?>