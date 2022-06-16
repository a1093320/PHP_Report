<?php
    session_start();
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
<title>太合子用戶登入</title>
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
<p><center><font size="10">用戶登入</font></p>
<form action="" method="post" enctype="multipart/form-data"></br>
        請輸入您的帳號: <input type="username" name="user"></br>
        </br>請輸入您的密碼: <input type="password" name="password"></br>
        </br><a href="forget.php">忘記密碼?</a></br>
        </br>
        <input type="button" value="前往註冊" onclick="location.href='signup.php'">
        <input type="submit" name="submit" value="登入"></br></br>
    </form>
<?php


if(isset($_POST["user"])){
    if($_POST["user"]!=null&&$_POST["password"]!=null){
        $uId=$_POST["user"];
        $uPwd=$_POST["password"];
        $SQL="SELECT * FROM user WHERE uName='$uId' AND uPwd='$uPwd'";
        $result=mysqli_query($link,$SQL);
        if(mysqli_num_rows($result)==1){
            $row=mysqli_fetch_assoc($result);
            if($row["role"]=="admin"){
                $_SESSION["admin"]="Yes";
                $_SESSION["login"]="Yes";
                $_SESSION["uId"]=$uId;
                mysqli_close($link);
                echo "<script> {window.alert('管理員登入成功');location.href='admin.php'} </script>";
            }else{
                $_SESSION["uId"]=$uId;
                $_SESSION["uPwd"]=$uPwd;
                $_SESSION["login"]="Yes";
                //echo "登入成功";
                mysqli_close($link);
                echo "<script> {window.alert('登入成功');location.href='index.php'} </script>";
                //header("Location:index.php");
            }
        }
        else{
            echo "登入失敗，請確認您的帳號密碼";
        }
    }
    // else{
    //     echo "您尚未輸入帳號或密碼";
    // }
}else{
    //echo "請輸入帳號密碼";
}
?>
</center>

</body>
<?php
    mysqli_close($link);
?>
</html>