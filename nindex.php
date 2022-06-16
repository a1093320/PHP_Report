<?php
    session_start();
?>
<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]=="Yes"){
        header("Location:index.php");
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
<title>太合子鍋貼水餃專賣店</title>
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

</body>


<div class="banner-area">
<div class="banner-shape">
<img src="main.jpeg" height="60%" alt="Banner">
<img src="static/picture/banner-shape1.png" alt="Shape">
<img src="static/picture/banner-shape2.png" alt="Shape">
<img src="static/picture/banner-shape3.png" alt="Shape">
<img src="static/picture/banner-shape4.png" alt="Shape">
<img src="static/picture/banner-shape5.png" alt="Shape">
<img src="static/picture/banner-shape6.png" alt="Shape">
</div>
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="banner-text">
<h1>太合子</br> <span>鍋貼水餃</span> 專賣</h1>
<p></p>
<a class="cmn-btn" href="nindex2.php">前往商品頁面</a>
</div>
</div>
</div>
</div>
</div>


<!-- <div class="counter-area">
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


<div class="choose-area pt-100 pb-70">
<div class="choose-shape">
<img src="static/picture/choose1.png" alt="Shape">
<img src="static/picture/banner-shape3.png" alt="Shape">
<img src="static/picture/choose2.png" alt="Shape">
</div>
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="choose-content">
<div class="row align-items-center">
<div class="col-sm-6 col-lg-6">
<div class="col-lg-12 p-0">
<div class="choose-item">
<i class='bx bx-network-chart'></i>
<h3>We Provide Qualified & Expert</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
</div>
<div class="col-lg-12 p-0">
<div class="choose-item">
<i class='bx bx-paper-plane'></i>
<h3>Quick Response & 24/7 Support</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="choose-item">
<i class='bx bx-wrench'></i>
<h3>Modern Tools & Technology Use</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="choose-contact">
<div class="section-title">
<span class="sub-title">Why Choose Us</span>
<h2>Certified Cleaning Service Company Over 15 years</h2>
</div>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur harum qui, beatae aliquid, esse modi asperiores, sit ea pariatur ipsa quaerat repellendus voluptatibus commodi doloremque architecto. Dignissimos doloremque quod modi.</p>
<a class="cmn-btn" href="contact.html">Contact Us</a>
</div>
</div>
</div>
</div>
</div>


<section class="service-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<span class="sub-title">Our Services</span>
<h2>We Are Committed To Give Our Best Services</h2>
</div>
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="service-item">
<div class="service-top">
<img src="static/picture/service1.png" alt="Service">
<img src="static/picture/service2.png" alt="Service">
</div>
<h3>
<a href="service-details.html">Car Washing</a>
</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries</p>
<a class="service-link" href="service-details.html">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="service-item two">
<div class="service-top">
<img src="static/picture/service3.png" alt="Service">
<img src="static/picture/service4.png" alt="Service">
</div>
<h3>
<a href="service-details.html">Plumbing Service</a>
</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries</p>
<a class="service-link" href="service-details.html">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="service-item three">
<div class="service-top">
<img src="static/picture/service5.png" alt="Service">
<img src="static/picture/service6.png" alt="Service">
</div>
<h3>
<a href="service-details.html">House Cleaning</a>
</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries</p>
<a class="service-link" href="service-details.html">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="service-item">
<div class="service-top">
<img src="static/picture/service1.png" alt="Service">
<img src="static/picture/service7.png" alt="Service">
</div>
<h3>
<a href="service-details.html">Office Cleaning</a>
</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries</p>
<a class="service-link" href="service-details.html">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="service-item two">
<div class="service-top">
<img src="static/picture/service3.png" alt="Service">
<img src="static/picture/service8.png" alt="Service">
</div>
<h3>
<a href="service-details.html">Carpet Cleaning</a>
</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries</p>
<a class="service-link" href="service-details.html">
Learn More
 <i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="service-item three">
<div class="service-top">
<img src="static/picture/service5.png" alt="Service">
<img src="static/picture/service9.png" alt="Service">
</div>
<h3>
<a href="service-details.html">Windows Cleaning</a>
</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries</p>
<a class="service-link" href="service-details.html">
Learn More
<i class='bx bx-right-arrow-alt'></i>
</a>
</div>
</div>
</div>
</div>
</section>


<section class="about-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-6">
<div class="about-content">
<div class="section-title">
<span class="sub-title">About Us</span>
<h2>We Are Dedicated To Do Your Work</h2>
</div>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
<a class="cmn-btn" href="#">Learn More</a>
</div>
</div>
<div class="col-lg-6">
<div class="about-img">
<img src="static/picture/about-bg.jpg" alt="About">
<div class="video-wrap">
<a href="javascript:;" class="popup-youtube">
<i class='bx bx-play'></i>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="project-area pt-100 pb-70">
<div class="project-shape">
<img src="static/picture/banner-shape5.png" alt="Shape">
<img src="static/picture/project-shape1.png" alt="Shape">
</div>
<div class="container">
<div class="section-title">
<span class="sub-title">Our Projects</span>
<h2>Have A Quick Look Some Of Our Works & Services</h2>
</div>
<div class="row">
<div class="col-sm-6 col-lg-6">
<div class="project-item">
<div class="project-top">
<a href="project-details.html">
<img src="static/picture/project1.jpg" alt="Project">
</a>
</div>
<h3>
<a href="project-details.html">Interior Cleaning Service</a>
</h3>
<a href="project-details.html">View Project</a>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="project-item">
<div class="project-top two">
 <a href="project-details.html">
<img src="static/picture/project2.jpg" alt="Project">
</a>
</div>
<h3>
<a href="project-details.html">Home Cleaning</a>
</h3>
<a href="project-details.html">View Project</a>
</div>
<div class="project-item">
<div class="project-top two">
<a href="project-details.html">
<img src="static/picture/project3.jpg" alt="Project">
</a>
</div>
<h3>
<a href="project-details.html">Office Cleaning Service</a>
</h3>
<a href="project-details.html">View Project</a>
</div>
</div>
<div class=" col-sm-6 col-lg-6">
<div class="project-item">
<div class="project-top">
<a href="project-details.html">
<img src="static/picture/project4.jpg" alt="Project">
</a>
</div>
<h3>
<a href="project-details.html">Hospital Cleaning Service</a>
</h3>
<a href="project-details.html">View Project</a>
</div>
</div>
<div class=" col-sm-6 col-lg-6">
<div class="project-item">
<div class="project-top">
<a href="project-details.html">
<img src="static/picture/project5.jpg" alt="Project">
</a>
</div>
<h3>
<a href="project-details.html">Home Cleaning Service</a>
</h3>
<a href="project-details.html">View Project</a>
</div>
</div>
</div>
</div>
</section>


<div class="estimate-area ptb-100">
<div class="container">
<div class="estimate-content">
<div class="section-title">
<h2>Let's Find A Estimate On Your Project</h2>
</div>
<form>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="email" class="form-control" placeholder="Your Email">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Place">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Subject">
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<textarea id="your-message" rows="6" class="form-control" placeholder="Your Message"></textarea>
</div>
</div>
<div class="col-lg-12">
<button type="submit" class="btn cmn-btn">Book A Schedule</button>
</div>
</div>
</form>
</div>
</div>
</div>


<section class="review-area ptb-100">
<div class="review-shape">
<img src="static/picture/banner-shape6.png" alt="Shape">
</div>
<div class="container">
<div class="section-title">
<span class="sub-title">Clients Review</span>
<h2>What clients Say About Us</h2>
</div>
<div class="review-slider owl-theme owl-carousel">
<div class="review-item">
<img src="static/picture/review1.jpg" alt="Review">
<h3>Jason Doe</h3>
<span>CEO</span>
<ul>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
</ul>
<p>There are many variations of passages of the Lorem Ipsum available an, but the majority have a suffered alteration in some form, by the injected a humour, or randomised words.</p>
</div>
<div class="review-item">
<img src="static/picture/review2.jpg" alt="Review">
<h3>Alina Decros</h3>
<span>Manager</span>
<ul>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
</ul>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt quis quaerat eius ducimus officia aut vitae, vel repudiandae, accusantium beatae alias, aliquam consequuntur.</p>
</div>
<div class="review-item">
<img src="static/picture/review3.jpg" alt="Review">
<h3>Jac Jacson</h3>
<span>Director</span>
<ul>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
 </li>
<li>
<i class='bx bxs-star checked'></i>
</li>
<li>
<i class='bx bxs-star checked'></i>
</li>
</ul>
<p>There are many variations of passages of the Lorem Ipsum available an, but the majority have a suffered alteration in some form, by the injected a humour, or randomised words.</p>
</div>
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
<a href="">
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
<a href="about.html" target="_blank">About</a>
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
<a href="email-protection.html#3a53545c557a5653425314595557" target="_blank"><span class="__cf_email__" data-cfemail="cda4a3aba28da1a4b5a4e3aea2a0">[email&#160;protected]</span></a>
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