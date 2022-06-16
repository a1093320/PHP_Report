<?php
    session_start();
    require("connect.php");
?>
<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]!="Yes"){
        header("Location:login.php");
    }
}else{
    header("Location:login.php");
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
<title>用戶資料</title>
<style>
table, th, td {
    border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color:;
}
</style>
</head>
<body>

<!-- <div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner">
<div class="rect1"></div>
<div class="rect2"></div>
<div class="rect3"></div>
<div class="rect4"></div>
<div class="rect5"></div>
</div>
</div>
</div>
</div> -->


<div class="navbar-area fixed-top">

<!-- <div class="mobile-nav">
<a href="" class="logo">
<img src="logo.jpg[" alt="Logo">
</a>
</div> -->

<div class="main-nav" style="background-color:#4c2d1b;padding:5px;margin-bottom:5px; width:100%;height:120px;">
<div class="container">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.php">
<img src="logo.png" width="65%" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
<center><a href="index.php"><font size="4">首頁</font></a>
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
<a href="about.php"><font size="4">關於我們</font></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</li>
<li class="nav-item">
<a href="local.php"><font size="4">店面地址&聯繫</font></a>
</center>
</li>
<!-- <li class="nav-item">
<a href="" class="nav-link"><font size="15">登入</font></a>
</li>
<li class="nav-item">
<a href="about.html" class="nav-link"><font size="15">註冊</font></a>
</li>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Services <i class='bx bx-chevron-down'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="services.html" class="nav-link">Services</a>
</li>
<li class="nav-item">
<a href="service-details.html" class="nav-link">Service Details</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Projects <i class='bx bx-chevron-down'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="projects.html" class="nav-link">Projects</a>
</li>
<li class="nav-item">
<a href="project-details.html" class="nav-link">Project Details</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
 <a href="blog.html" class="nav-link">Blog</a>
</li>
<li class="nav-item">
<a href="blog-details.html" class="nav-link">Blog Details</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="contact.html" class="nav-link">Contact</a>
</li> -->
</ul>
<div class="side-nav">
<a href="car.php" ><font size="3">購物車</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="account.php" ><font size="3">帳戶資料</font></a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="logout.php" ><font size="3">登出帳號</font></a>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
</br></br></br></br></br></br>
<?php
    $uId=$_SESSION["uId"];
    $SQL="SELECT * FROM user WHERE uName='$uId'";
    $result=mysqli_query($link,$SQL);
    $row=mysqli_fetch_row($result);
    $email=$row[3];
    $tel=$row[4];
    $_SESSION["aemail"]=$email;
    $_SESSION["atel"]=$tel;
    mysqli_close($link);        
?>

<table <table style="width:5%">
<tr><th><font size="4"><a href="history.php"><input type="button" value="查詢訂單紀錄"></a></font></th></tr>
</table>
<center>
<p><font size="10">用戶資料</font></p>
<form action="modify.php" method="post" enctype="multipart/form-data"></br>
        <font size="5"><?php echo "您的帳號:".$uId;?></br>
        </br><?php echo "您的email:".$email;?></br>
        </br><?php echo "您的連絡電話:".$tel;?></br>
        </br><input type="submit" name="submit" value="修改資訊">
        <a href="forget.php"><input type="button" value="密碼變更"></a>
        </font>
</form>
</center>
</body>
<?php
    /* mysqli_close($link); */
?>
</html>