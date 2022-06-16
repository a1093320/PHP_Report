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
<title>購物車內容</title>
<style>
table, th, td {
    border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #FFDAB9;
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
</br></br></br></br></br></br></br></br>
<?php
    $uName=$_SESSION['uId'];
    $SQL="SELECT * FROM car WHERE uName='$uName'";
    $result=mysqli_query($link,$SQL);
?>
<center>
<font size="10">購物車內容</font>
<br><br>
<table style="width:50%">
<tr>
<th><center><font size='5'>品項</font></center></th><th><center><font size='5'>數量</font></center></th><th><center><font size='5'>金額</font></center></th><th><center><font size='5'>訂單變更</font></center></th>
</tr>
<?php
    $total=0;
    while($row=mysqli_fetch_assoc($result)){
        $cNo=$row['cNo'];
        $type=$row['utype'];
        $number=$row['unumber'];
        $money=$row['umoney'];
        $total=$total+$money;
		echo "<tr>";
		echo "<td><center><font size='5'>".$type."</font></center></td>";
		echo "<td><center><font size='5'>".$number."</font></center></td>";
        echo "<td><center><font size='5'>".$money."</font></center></td>";
        echo "<td><center><font size='5'><a href='delete.php?cNo=$cNo'>刪除</a></font></center></td>";
		echo "</tr>";
    }
    mysqli_close($link);
?>
</table>
</br></br></br>
<?php
    echo "<font size='5'><center>總金額為:".$total."元</center></font>";
    $_SESSION["total"]=$total;
?>
</br></br>
<a href="index.php"><input type="button" value="回首頁"></a>&nbsp
<?php 
    if($total!=0){
        echo "<a href='cko.php'><input type='button' value='結帳去'></a>";
        $_SESSION["cko"]="yes";
    }
?>
</center>
</body>
</html>