<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body{
        background-color: white;
    }
    input{
        width: 40%;
        height: 5%;
        border: 1px;
        border-radius: 5px;
        padding: 8px 15px 8px 15px;
        margin: 10px 0px 15px 0px;
        box-shadow: 1px 1px 2px 1px green;
    }
    input[type=button], input[type=submit], input[type=reset] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    width:20%;
    }
</style>
</head>
<body>
    <center>
        <h1>Login</h1>
        <?php
            if (@$_GET['Empty'] == true) {
            
        ?>
            <div style="color: red"><?php echo $_GET['Empty'] ?></div>        
        <?php
            }
        ?>
        <?php
            if (@$_GET['Invalid'] == true) {
            
        ?>
            <div style="color: red"><?php echo $_GET['Invalid'] ?></div>        
        <?php
            }
        ?>
        <form action="checklogin.php" method="POST">
        <input type="text" name="user" placeholder="User Name"><br>
        <input type="password" name="pw" placeholder="Password"><br>
        <input type="submit" value="Login" name="login">
        <a href="/LamBai/register.php">Register</a>
        </form>
    </center>
</body>
</html>