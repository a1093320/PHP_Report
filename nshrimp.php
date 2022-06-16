<?php
    session_start();
?>
<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="Yes"){
        header("Location:shrimp.php");
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
<title>太合子冷凍鮮蝦水餃</title>
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
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="signup.php" ><font size="3">註冊</font></a>
</div>
</div>
</nav>
</div>
</div>
</div>
</div>
<div class="container">
</br></br></br></br></br></br></br></br>
<div class="row">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7">
<div class="choose-content">
<div class="about-img">
<img src="07_冷凍水餃_鮮蝦_v1.jpg" width="70%" alt="Choose">

</div>
</div>
</div>
<div class="col-lg-4">
<div class="choose-contact">
<div class="section-title">

<h2>鮮蝦水餃</h2>
</div>
<form action="login.php" method="post" enctype="multipart/form-data">
<p><font size="5">50粒/包</font><font size="4"></br></br>成分:豬肉、高麗菜、蔥、薑、蝦仁、紫山藥、麵粉、醋、醬油、油、鹽</br></br>保存方式:密封置於冷凍-18度以下即可</br></br>保存期限:30天</br></br>烹煮流程:不須解涷直接放入滾水中，開大火輕輕翻動水餃避免黏鍋，靜待6~8分鐘即可</br></br></font><font size="5" color='red'>本店餡料使用台灣豬肉</br>不添加防腐劑及人工香料</font></p>
<input type=submit name=submit value="加入購物車">&nbsp&nbsp<input type="number" size="2" name="number" min="1" max="10">&nbsp&nbsp375元/包
</form>
</div>
</div>
</div>
</div>
</div>
</body>
</div>
</html>