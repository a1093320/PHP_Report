<!DOCTYPE html>
<?php
    session_start();
    $uId=$_SESSION["uId"];
?>
<?php
if(isset($_SESSION["pass"])){
    if($_SESSION["pass"]!="yes")
    header("Location:nindex.php");
}else{
    header("Location:nindex.php");
}
?>
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
<title>驗證</title>
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
</li>
</ul>
<div class="side-nav">
<a href="index.php" ><font size="3" >回首頁</font></a>
</div>
</div>
</div>
</br></br></br></br>
<p><center><font size="10">變更密碼</font></p>
<form action="" method="post" enctype="multipart/form-data"></br>
        請輸入新的密碼: <input type="password" name="password"></br>
        </br>再次輸入新的密碼: <input type="password" name="pass"></br>
        </br><input type="submit" name="submit" value="確認">
</form>
<?php
    if(isset($_POST["password"])){
        if($_POST["password"]==$_POST["pass"]){
            $pwd=$_POST["password"];
            require("connect.php");
            $SQL="UPDATE user SET uPwd='$pwd' WHERE uName='$uId'";
            $result=mysqli_query($link,$SQL);
            mysqli_close($link);
            echo "<script> {window.alert('密碼變更完成');location.href='index.php'} </script>";
        }
        else{
            echo "請再次確認您的密碼";
        }
    }
?>
</body>
</html>
