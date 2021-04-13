<!DOCTYPE html>
<html lang="en">
<title>Index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- các đường đến w3school, link lấy icon-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style.css">
<!-- các đường file css<style>
    .body {
        background-image: url('/img/background.jpg');
    }
</style>-->
    

<body background="./img/back.jpg">
    <!-- Navbar -->
    <div class="menu">
        <!--Thanh menu-->
        <div class="w3-bar w3-gray w3-card w3-left-align w3-large">
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-black w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
            <a href="./index.php" class="w3-bar-item w3-button w3-padding-large w3-white"><img src="./img/logo.jpg" style="height: 24px; width: 30px"></i>Logo</a>
            <a href="./about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">PhongGiaHo</a>
            <a href="./about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About me</a>
            <a href="./about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Experience</a>
            <a href="./skill.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Skills</a>
            <a href="./skill.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Education</a>
            <a href="./about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Projects</a>
            <a href="./viewblog.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Blog</a>
        </div>

        <!-- Navbar on small screens -->

    </div>

    <!-- Phần giữa của trang -->
    <header class="containerbody" style="padding: 128px 16px;text-align: center">

        <i class="imglogo"><img src="./img/logo.jpg" style="width:100px; height: 100px;" > </i>
        <h1 style="text-align:center; font-size:60px">Welcome to my portfolio</h1>
        <button onclick="window.location='./login.php'" class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Login</button>
        <!-- thẻ button để làm button login-->
        <div class="w3-xlarge w3-padding-800">
                <h2 class="icon"><a href="http://facebook.com/giaphong.ho14"><i class="fa fa-facebook-official w3-hover-opacity fa-10x" style="margin: 100px;"></i>
                <i class="fa fa-instagram w3-hover-opacity " style="margin: 100px;"></i>
                <!--các icon-->
                <i class="fa fa-twitter w3-hover-opacity" style="margin: 100px;"></i>
                <i class="fa fa-linkedin w3-hover-opacity" style="margin: 100px;"></i>
            </h2>
        </div>
    </header>
</body>

</html>
