<?php
    session_start();
    require("connect.php");
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
<title>密碼變更</title>
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
<p><center><font size="10">忘記/變更密碼</font></p>
<form action="" method="post" enctype="multipart/form-data"></br>
        請輸入您的email: <input type="email" name="email"></br>
        </br>請輸入您的用戶帳號: <input type="username" name="user"></br>
        </br><input type="submit" name="submit" value="發送驗證碼">
</form>

<?php
if(isset($_POST["user"])){
    if($_POST["user"]!=null&&$_POST["email"]!=null){
        $uId=$_POST["user"];
        $uemail=$_POST["email"];
        $SQL="SELECT * FROM user WHERE uName='$uId' AND Uemail='$uemail'";
        $result=mysqli_query($link,$SQL);
        if(mysqli_num_rows($result)==1){
            $a=rand(1000,9999);
            $_SESSION["uId"]=$uId;
            $_SESSION["uemail"]=$uemail;
            $_SESSION["allow"]="yes";
            $_SESSION['authnum']=$a;
            $_SESSION["send"]="Yes";
            mysqli_close($link);
            header("Location:mailsend.php");      
        }else{
            echo "錯誤的帳號或email";
        }
    }else{
        echo "錯誤的帳號或email";
    }
}else{
    echo "請輸入您的email與帳號";
}
?>
</body>
</html>