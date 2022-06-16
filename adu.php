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
<title>管理員 新增用戶</title>
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
<center>
<form action="" method="post" enctype="multipart/form-data">
<font size="10">新增用戶</font>
<table style="width:50%">
<tr>
<th><center><font size='5'>用戶名稱</font></center></th><th><center><font size='5'>密碼</font></center></th><th><center><font size='5'>email</font></center></th><th><center><font size='5'>電話</font></center></th><th><center><font size='5'>權限</font></center>
</tr>
<tr>
<td><center><font size="3"><input type="username" name="user"></font></center></td>
<td><center><font size="3"><input type="password" name="password"></font></center></td>
<td><center><font size="3"><input type="email" name="email"></font></center></td>
<td><center><font size="3"><input type="tel" name="tel"></font></center></td>
<td><center><font size="3"><select name="role"><option value="user">user</option><option value="admin">admin</option></font></center></td>
</table></br></br>
<center><a href="aduser.php"><input type="button" value="返回"></a>&nbsp<input type="submit" value="新增用戶"></center>
</form>
<?php
    if(isset($_POST["user"])&&isset($_POST["password"])&&isset($_POST["email"])&&isset($_POST["tel"])&&isset($_POST["role"])){
        $user=$_POST["user"];
        $pwd=$_POST["password"];
        $email=$_POST["email"];
        $tel=$_POST["tel"];
        $role=$_POST["role"];
        if($user!=null&&$pwd!=null&&$email!=null&&$tel!=null&&$role!=null){
            $_SESSION["auser"]=$user;
            $_SESSION["apwd"]=$pwd;
            $_SESSION["aemail"]=$email;
            $_SESSION["atel"]=$tel;
            $_SESSION["arole"]=$role;
            echo "<script> {location.href='addb.php'} </script>";
        }
        else{
            echo "</br>請確認是否填寫所有欄位";
        }
    }else{
        //echo "請確認是否填寫所有欄位";
    }
?>
</body>
</html>