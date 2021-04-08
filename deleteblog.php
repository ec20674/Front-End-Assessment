<?php
    require_once "./db_connect.php";
    if(isset($_GET['GetID']))
    {
        $id = $_GET['GetID'];
        $sql = "DELETE FROM blog WHERE blogID = '".$id."'";
        $result = mysqli_query($connection, $sql);
        if($result) 
        {
            header("Location:viewblog.php");
        }else{
            echo "check your query";
        }
    }else{
        header('Location:view.php');
    }
?>