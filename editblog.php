<?php
    require_once "./db_connect.php";
    $blogID = $_GET['GetID'];
    $sql = "SELECT * FROM blog WHERE blogID = '$blogID'";
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['blogID'];
        $title = $row['title'];
        $content = $row['content']; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Blog</title>
    <link rel="stylesheet" href="./addblog.css">
</head>
<body>
    <center>
        <form name="editblog" action="updateblog.php?ID=<?php echo $id ?>" method="post" onsubmit="return validateForm()">
        <div class="container">
            <h2> Update Blog</h2>
            <label for="uname"><b></b></label>
            <input type="text" placeholder="Title" name="title"  value="<?php echo $title?>">
            <label for="psw"><b></b></label>
            <input type="text" style="height: 200px;" placeholder="Enter your text here" name="content"  value="<?php echo $content?>">
            <div class="nut">
                <button type="submit" name="update">Update</button>
                <button type="reset" name= "clear" onclick="clearInput()" >Clear</button>
                <button href="viewblog.php" name= "cencel" >Cancel</button>
            </div>
        </div>
    </form>
    </center>
</body>
<script>
function clearInput() {
	var r = confirm("Do you want to clear input?");
    if(r == true){
    document.getElementById("myForm").reset();
    }
}
function validateForm(){
    var x = document.editblog.title.value;
    var y = document.editblog.content.value;
    if (x == "" || x == null || y == null || y == "") {
    alert("The fields be filled out");
    return false;
    }
}
</script>
</html>