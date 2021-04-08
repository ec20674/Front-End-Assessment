<?php
    require_once "./db_connect.php";
    if(isset($_POST['update']))
    {
        $id = $_GET['ID'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "UPDATE blog SET title = '".$title."', content = '".$content."' WHERE blogID = '".$id."'";
        $result = mysqli_query($connection, $sql);
        if($result) 
        {
            header("Location:viewblog.php");
        }else{
            echo "check your query";
        }
    }else{
        header('Location:viewblog.php');
    }
?>