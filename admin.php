<?php
    session_start();
?>
<?php
    if(isset($_SESSION["admin"])){
        if($_SESSION["admin"]!="Yes"){
            header("Location:index.php");
        }
    }else{
        header("Location:index.php");
    }
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
<title>管理員 訂單資訊</title>
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
<center><a href="admin.php"><font size="4">訂單管理</font></a>
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
<a href="aduser.php"><font size="4">用戶管理</font></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
<a href="logout.php" ><font size="3">登出帳號</font></a>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
<br><br><br><br><br><br><br><br>
<?php
    //$uName=$_SESSION["uId"];
    $SQL="SELECT * FROM item ORDER BY 'uName,Ulocal,Utel,utype,ustate'";
    $result=mysqli_query($link,$SQL);
?>
<center>
<font size="10">訂單管理</font>
<br><br>
<table style="width:50%">
<tr>
<th><center><font size='5'>用戶名稱</font></center></th><th><center><font size='5'>地址</font></center></th><th><center><font size='5'>電話</font></center></th><th><center><font size='5'>品項</font></center></th><th><center><font size='5'>數量</font></center></th><th><center><font size='5'>貨態</font></center></th><th><center><font size='5'>金額</font></center></th><th><center><font size='5'>刪除</font></center></th><th><center><font size='5'>修改</font></center></th>
</tr>
<?php
    while($row=mysqli_fetch_assoc($result)){
        $No=$row['uNo'];
        $uName=$row['uName'];
        $type=$row['utype'];
        $local=$row['Ulocal'];
        $money=$row['umoney'];
        $tel=$row['Utel'];
        $number=$row['unumber'];
        $state=$row['ustate'];
		echo "<tr>";
		echo "<td><center><font size='3'>".$uName."</font></center></td>";
		echo "<td><center><font size='3'>".$local."</font></center></td>";
        echo "<td><center><font size='3'>".$tel."</font></center></td>";
        echo "<td><center><font size='3'>".$type."</font></center></td>";
        echo "<td><center><font size='3'>".$number."</font></center></td>";
        echo "<td><center><font size='3'>".$state."</font></center></td>";
        echo "<td><center><font size='3'>".$money."</font></center></td>";
        echo "<td><center><font size='3'><a href='adelete.php?uNo=$No'>刪除</a></font></center></td>";
        echo "<td><center><font size='3'><a href='admdfy.php?uNo=$No'>修改</a></font></center></td>";
		echo "</tr>";
    }
    mysqli_close($link);
?>
</table>
</center>
</body>
</html>