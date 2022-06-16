<?php
    session_start();
?>
<?php
if(isset($_SESSION["login"])&&isset($_SESSION["per"])){
    if($_SESSION["login"]!="Yes"){
        header("Location:login.php");
    }
    else if($_SESSION["per"]!="yes"){
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="static/css/bootstrap.min.css">

<link rel="stylesheet" href="static/css/meanmenu.css">

<link rel="stylesheet" href="static/css/boxicons.min.css">

<link rel="stylesheet" href="static/css/odometer.min.css">

<link rel="stylesheet" href="static/css/magnific-popup.min.css">

<link rel="stylesheet" href="static/css/owl.carousel.min.css">
<link rel="stylesheet" href="static/css/owl.theme.default.min.css">

<link rel="stylesheet" href="static/css/nice-select.min.css">

<link rel="stylesheet" href="static/css/style.css">

<link rel="stylesheet" href="static/css/responsive.css">
<title>確認訂單資訊</title>
</head>

<body>
<div class="main-nav" style="background-color:#4c2d1b;padding:5px;margin-bottom:5px; width:100%;height:120px;">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.php">
<img src="logo.png" width="65%" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<!-- <ul class="dropdown-menu">
<li class="nav-item">
<a href="" class="index.html">Home Page One</a>
</li> -->
<!-- li class="nav-item">
<a href="index-2.html" class="nav-link">Home Page Two</a>
</li>
<li class="nav-item">
<a href="index-3.html" class="nav-link">Home Page Three</a>
</li> -->
<!-- </ul> -->
</li>
<li class="nav-item">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</li>
<li class="nav-item">
</center>
</li>
</ul>
<div class="side-nav">
<a href="index.php" ><font size="3">返回首頁</font></a>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
</br></br></br></br></br></br></br></br>
<?php
    $tel=$_SESSION["tele"];
    $email=$_SESSION["ema"];
    $address=$_SESSION["address"];
    $total=$_SESSION["total"];
    $_SESSION["create"]="yes";
?>
<p><center><font size="10">訂單資訊</font></p>
<form action="create.php" method="post" enctype="multipart/form-data"></br>
        收件地址:<?php echo $address; ?></br>
        </br>您的連絡電話:<?php echo $tel; ?></br>
        </br>您的email:<?php echo $email; ?></br>
        </br>總金額:<?php echo $total; ?></br>
        </br>
        <a href="javascript:history.back()"><input type="button" value="返回上一步"></a>
        <input type="submit" name="submit" value="訂單建立"></br></br>
</form>
</body>
</html>