<?php
    session_start();
    if(isset($_SESSION["login"])){
        if($_SESSION["login"]=="Yes"){
            header("Location:index.php");
        }
    }
?>
<?php
    require("connect.php");
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
<title>太合子用戶註冊</title>
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
</div>
</div>
<p><center><font size="10">用戶註冊</font></p>
<form action="" method="post" enctype="multipart/form-data"></br>
        請輸入您的用戶帳號: <input type="username" name="user"></br>
        </br>請輸入您的密碼: <input type="password" name="password"></br>
        </br>請再次輸入您的密碼: <input type="password" name="pass"></br>
        </br>請輸入電子郵件: <input type="email" name="email"></br>
        </br>請輸入您的手機號碼: <input type="tel" name="tel"></br>
        </br>
        <input type="button" value="回到首頁" onclick="location.href='index.php'">
        <input type="submit" name="submit" value="註冊完成"></br></br>
        
    </form>
<?php
if(isset($_POST["user"])){
 if($_POST["user"]!=null&&$_POST["password"]!=null&&$_POST["email"]!=null&&$_POST["tel"]!=null){
    $uId=$_POST["user"];
    $uPwd=$_POST["password"];
    $uemail=$_POST["email"];
    $utel=$_POST["tel"];
    $check=$_POST["pass"];
    $SQL="SELECT * FROM user WHERE uName='$uId'";
    $result=mysqli_query($link,$SQL);
    $SQL="SELECT * FROM user WHERE Uemail='$$uemail'";
    $result2=mysqli_query($link,$SQL);
    $SQL="SELECT * FROM user WHERE Utel='$$utel'";
    $result3=mysqli_query($link,$SQL);
    if($check==$uPwd){
        if(mysqli_num_rows($result)>=1){
            //echo "登入成功";
            echo "帳號名稱已有人使用";   
        }
        if(mysqli_num_rows($result2)>=1){
            echo "此email已註冊過";
        }
        if(mysqli_num_rows($result3)>=1){
            echo "此手機已註冊過";
        }
        if(mysqli_num_rows($result)==0&&mysqli_num_rows($result2)==0&&mysqli_num_rows($result3)==0){
            mysqli_close($link);
            require("connect.php");
            $SQL="INSERT INTO user (uName,uPwd,Uemail,Utel,role) VALUES ('$uId','$uPwd','$uemail','$utel','user')";
            $result=mysqli_query($link,$SQL);
            mysqli_close($link);
            echo "<script> {window.alert('註冊成功');location.href='index.php'} </script>";
            //header("Location:index.php");
        }
    }
    else{
        echo "密碼輸入錯誤，請再次確認";
    }
 }
 else{
     echo "請確認填寫所有欄位";
 }
}
?>
</body>
<?php
    mysqli_close($link);
?>
</html>