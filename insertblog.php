<?php
    require_once "./db_connect.php";
    if(isset($_POST['submit'])){
        
            $title = $_POST['title'];
            $content = $_POST['content'];
            //get current date time
            $date = date('Y-m-d H:i:s');
            //mySQL insert
            $sql = "INSERT INTO blog(title, content, date) VALUES ('$title','$content', '$date')";
            $result = mysqli_query($connection, $sql);

            if($result){
                header("Location:viewblog.php");
            }else{
                echo "Failed to insert";
            }
        }
?>