<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Blog</title>
    <link rel="stylesheet" href="./addblog.css">
</head>

<body>
        <?php 
            session_start();
            //check session
            if(!isset($_SESSION['User'])){
                session_destroy();
                header("Location:login.php");
            }
        ?>
    <h3>Hello <?php echo $_SESSION['User'];?></h3>
    <button onclick="logout()">Logout</button>
    <button onclick = "viewblog()" >View Blogs</button>
    <form onsubmit="return validateForm()" action="insertblog.php" name="addblog" method="post"  required>
        <div class="container">
            <h2> Add Blog</h2>
            <input type="text" placeholder="Title" name="title" >
            <input type="text" style="height: 200px;" placeholder="Enter your text here" name="content">
            <div class="nut">
                <button type="submit" name="submit">Post</button>
                <button type="reset" name= "clear" onclick="clearInput()">Clear</button> 
            </div>
        </div>
    </form>
</body>
<script>
function clearInput() {
	var r = confirm("Do you want to clear input?");
    if(r == true){
    document.getElementById("myForm").reset();
    }
}
function validateForm(){
    var x = document.addblog.title.value;
    var y = document.addblog.content.value;
    if (x == "" || x == null || y == null || y == "") {
    alert("The fields be filled out");
    return false;
    }
}
function logout() {
    window.location.href="logout.php?logout";
}
function viewblog() {
    window.location.href="viewblog.php";
}
</script>
</html>