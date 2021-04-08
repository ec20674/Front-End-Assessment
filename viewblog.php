<?php
    require_once "./db_connect.php";
    $sql = "SELECT * FROM blog ORDER BY date DESC";
    $result = mysqli_query($connection, $sql);  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>View Blogs</title>
    <link rel="stylesheet" href="./viewblog.css">
</head>
<body>
    <center>
        <h1>View Blogs</h1>
        <button style="float: right" onclick="logout()">Logout</button>
        <button style="float: right" onclick = "addblog()" >Add</button>
        <div class="container">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['blogID'];   
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['date'];
            ?>
                <h3 style="color : white"><?php echo $title ?></h3>       
                <p style="float: right;color: white"><?php echo $date ?></p> <br>
                <p style="float: left; color : white"><?php echo $content ?></p>  
                <br>
                <a style="float: right; color: red" href="editblog.php?GetID=<?php echo $id ?>">Edit</a>
                <br>
                <a style="float: right; color: red" href="deleteblog.php?GetID=<?php echo $id ?>">Delete</a>
                <br>
                <hr class="rounded">
            <?php
                }
            ?>
        </div>
        <!-- <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Date Inserted</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['blogID'];
                $title = $row['title'];
                $content = $row['content'];
                $date = $row['date'];
            ?>
            <tr>
                    <td><?php echo $id ?></td>
                    <td><?php echo $title ?></td>
                    <td><?php echo $content ?></td>
                    <td><?php echo $date ?></td>
                    <td><a href="editblog.php?GetID=<?php echo $id ?>">Edit</a></td>
                    <td><a href="deleteblog.php?GetID=<?php echo $id ?>">Delete</a></td>
            </tr>
            <?php
                }
            ?>
            </tbody>
        </table> -->
    </center>
</body>
</html>
<script>
       function logout() {
         window.location.href="logout.php?logout";
       }
       function addblog(){
           window.location.href="addblog.php";
       }
</script>