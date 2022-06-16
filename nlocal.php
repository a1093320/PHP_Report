<?php
    session_start();
?>
<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="Yes"){
        header("Location:local.php");
    }
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
<title>聯繫我們</title>
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
<a href="login.php" ><font size="3">登入</font></a>
&nbsp&nbsp&nbsp&nbsp
<a href="signup.php" ><font size="3">註冊</font></a>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
</br></br></br></br></br></br></br>
<center>
<p><font size="6">太合子 五股店</font></br></br>
地址:新北市五股區登林路71號</br></br>
電話:0971 801 173</br></br>
營業時間:周一~周六11:00~20:00</br></br>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14455.784546208122!2d121.4282923!3d25.0698147!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x86f7fde413eb2233!2z5aSq5ZCI5a2QIOmNi-iyvOawtOmkg-WwiOizo-W6lw!5e0!3m2!1szh-TW!2stw!4v1654281223402!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</p></br></br></br></br>
<p><font size="6">太合子 林口店</font></br></br>
地址:新北市林口區中山路52號</br></br>
電話:0971 799 683</br></br>
營業時間:周一~周六11:00~20:00</br></br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.687264223675!2d121.39300541484283!3d25.078586783951497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a6f73b6e41cb%3A0x4d39ade072ce367c!2zMjQ05paw5YyX5biC5p6X5Y-j5Y2A5Lit5bGx6LevNTLomZ8!5e0!3m2!1szh-TW!2stw!4v1654281765021!5m2!1szh-TW!2stw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</p></center>
</body>
</html>