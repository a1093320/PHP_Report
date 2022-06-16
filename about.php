<?php
    session_start();
?>
<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]!="Yes"){
        header("Location:nabout.php");
    }
}else{
    header("Location:nabout.php");
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
<title>關於我們</title>
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



<!-- <div class="page-title-area">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="title-item">
<h2>關於我們</h2>

</div>
</div>
</div>
</div>
</div> -->

</br></br></br></br>
<div class="choose-area two pt-100 pb-70">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about-img">
<img src="profile.jpg" width="70%" alt="Choose">
<!-- <img src="賣場封面_v1.jpg" alt="Choose"> -->
</div>
</div>
<div class="col-lg-6">
<div class="choose-contact two">
<div class="section-title">
<span class="sub-title">關於我們</span>
<h2>太合子鍋貼水餃專賣店</h2>
</div>
<p><font size="5">太合子 鍋貼水餃專賣店 五股店為創始店成立於2019年，2021年7月成立林口店，店名 "合子" 在古代為水餃的意思，故以此取名。老闆從2003年接觸水餃、鍋貼產業至今，曾任職過知名企業廠長，從基本功包料、運送...等流程做起，直至廠長，因老闆理想是成立自家品牌，故成立了"太合子"，希望讓客人吃到食材新鮮優良的鍋貼水餃！</font></p>
<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.</p> -->
</div>
</div>
</div>
</div>
</div>

<div class="choose-area two pt-100 pb-70">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about-img">
<img src="01_冷凍水餃_生水餃_v1.jpg" width="70%" alt="Choose">
<!-- <img src="賣場封面_v1.jpg" alt="Choose"> -->
</div>
</div>
<div class="col-lg-6">
<div class="choose-contact two">
<div class="section-title">
<h2><font size="6">餡料嚴選新鮮、天然食材，讓您吃得安心!</font></h2>
</div>
<p><font size="5">太合子堅持採用台灣天然道地食材，不添加人工香料、色素及防腐劑，用優質品質食材，讓客人可以吃的放心。經由不同的嘗試料理與自製醬料、市調人們對於餃類食品的味覺，嚴謹的調配各式料理比例，堅持傳統風味，調配出多種口味，有新穎的料理感受。</font></p>
<!-- <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.</p> -->
</div>
</div>
</div>
</div>
</div>



<!-- <div class="counter-area four">
<div class="counter-wrap">
<div class="container">
<div class="row">
<div class="col-6 col-sm-6 col-lg-3">
<div class="counter-item">
<h3>
<span class="odometer" data-count="15">00</span>
</h3>
<p>Years Experienced</p>
</div>
</div>
<div class="col-6 col-sm-6 col-lg-3">
<div class="counter-item">
<h3>
<span class="odometer" data-count="156">00</span>
</h3>
<p>Happy Clients</p>
</div>
</div>
<div class="col-6 col-sm-6 col-lg-3">
<div class="counter-item">
<h3>
<span class="odometer" data-count="756">00</span>
</h3>
<p>Project Completed</p>
</div>
</div>
<div class="col-6 col-sm-6 col-lg-3">
<div class="counter-item">
<h3>
<span class="odometer" data-count="22">00</span>
</h3>
<p>Active Project</p>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="watch-area ptb-100">
<div class="container">
<div class="section-title">
<h2>Watch The Full Video To Know More About Us</h2>
</div>
<div class="watch-item">
<div class="d-table">
<div class="d-table-cell">
<div class="video-wrap">
<a href="javascript:;" class="popup-youtube">
<i class='bx bx-play'></i>
</a>
</div>
<div class="watch-content">
<h3>We Love The Work</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="love-area pb-100">
<div class="container">
<div class="love-item">
<div class="section-title">
<h2>Why You Love To Work With Us</h2>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
 <ul>
<li>
<i class='bx bx-check'></i>
We Provide Qualified & Expert
</li>
<li>
<i class='bx bx-check'></i>
Safe Work & Satisfaction
</li>
<li>
<i class='bx bx-check'></i>
Quick Response & 24/7 Support
</li>
<li>
<i class='bx bx-check'></i>
Less Time Done More
</li>
</ul>
</div>
</div>
</section>


<div class="subscribe-area">
<div class="subscribe-wrap">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="section-title">
<h2>Stay Up To Date With Our Latest News!</h2>
</div>
</div>
<div class="col-lg-6">
<form class="newsletter-form" data-toggle="validator">
<input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required="" autocomplete="off">
<button class="btn cmn-btn" type="submit">
Subscribe
</button>
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
</div>
</div>
</div>


<footer class="pt-100">
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-logo">
<a href="index.html">
<img src="static/picture/logo.png" alt="Logo">
</a>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic.</p>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-company">
<h3>Company</h3>
<ul>
<li>
<a href="" target="_blank">About</a>
</li>
<li>
<a href="services.html" target="_blank">Services</a>
</li>
<li>
<a href="projects.html" target="_blank">Projects</a>
</li>
<li>
<a href="team.html" target="_blank">Team</a>
</li>
<li>
<a href="blog.html" target="_blank">Blog</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-company">
<h3>Support</h3>
<ul>
<li>
<a href="faq.html" target="_blank">FAQ</a>
</li>
<li>
<a href="privacy-policy.html" target="_blank">Privacy Policy</a>
</li>
<li>
<a href="terms-and-conditions.html" target="_blank">Terms & Conditions</a>
</li>
<li>
<a href="#" target="_blank">Community</a>
</li>
<li>
<a href="contact.html" target="_blank">Contact</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="footer-item">
<div class="footer-contact">
<h3>Contact Info</h3>
<ul>
<li>
<span>Location: 6th Floor, Barbosa, Sidney</span>
</li>
<li>
<span>Email:</span>
<a href="email-protection.html#8be2e5ede4cbe7e2f3e2a5e8e4e6" target="_blank"><span class="__cf_email__" data-cfemail="b3daddd5dcf3dfdacbda9dd0dcde">[email&#160;protected]</span></a>
</li>
<li>
<span>Phone:</span>
<a href="tel:+0123456789" target="_blank">+0123 456 789</a>
</li>
</ul>
</div>
<div class="footer-social">
<ul>
<li>
<a href="#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="#" target="_blank">
<i class='bx bxl-instagram'></i>
</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="copyright-area">
<p>Copyright &copy; 2022.Company name All rights reserved.<a target="_blank" href="https://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
</div>
</div>
</footer>


<script data-cfasync="false" src="static/js/email-decode.min.js"></script><script src="static/js/jquery-3.5.1.min.js"></script>
<script src="static/js/popper.min.js"></script>
<script src="static/js/bootstrap.min.js"></script>

<script src="static/js/form-validator.min.js"></script>

<script src="static/js/contact-form-script.js"></script>

<script src="static/js/jquery.ajaxchimp.min.js"></script>

<script src="static/js/jquery.meanmenu.js"></script>

<script src="static/js/odometer.min.js"></script>
<script src="static/js/jquery.appear.js"></script>

<script src="static/js/jquery.magnific-popup.min.js"></script>

<script src="static/js/owl.carousel.min.js"></script>

<script src="static/js/jquery.nice-select.min.js"></script>

<script src="static/js/thumb-slide.js"></script>

<script src="static/js/custom.js"></script> -->
</body>
</html>