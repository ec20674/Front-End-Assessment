<?php
    require_once "./db_connect.php";
    if(isset($_POST['submit'])){
        if(empty($_POST['user']) || empty($_POST['pw'])){
            echo "Please do not let these field empty";
        }else{
            $name = $_POST['user'];
            $pw = $_POST['pw'];
            $sql = "INSERT INTO user(userName, password) VALUES ('$name','$pw')";
            $result = mysqli_query($connection, $sql);

            if($result){
                header("Location:login.php");
            }else{
                echo "Failed to inser";
            }
        }
    }else{
        header('Location:index.php');
    }
?>