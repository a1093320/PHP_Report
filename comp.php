<?php
    session_start();
?>
<?php
if(isset($_SESSION["login"])){
    if($_SESSION["login"]!="Yes"){
        header("Location:ncomp.php");
    } 
}else{
    header("Location:ncomp.php");
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
<title>太合子冷凍綜合水餃</title>
</head>
<body>
<div class="navbar-area fixed-top">
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
</li>
<li class="nav-item">
<a href="about.php"><font size="4">關於我們</font></a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</li>
<li class="nav-item">
<a href="local.php"><font size="4">店面地址&聯繫</font></a>
</center>
</li>
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
<div class="container">
</br></br></br></br></br></br></br></br>
<div class="row">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-7">
<div class="choose-content">
<div class="about-img">
<img src="08_冷凍水餃_綜合_v1.jpg" width="70%" alt="Choose">

</div>
</div>
</div>
<div class="col-lg-4">
<div class="choose-contact">
<div class="section-title">

<h2>綜合水餃</h2>
</div>
<form action="" method="post" enctype="multipart/form-data">
<p><font size="5">50粒/包</font></br></br><font size="5" color="red">所有口味一次滿足</font><font size="4"></br></br>內含五種口味水餃，每種口味各10顆</br></br>保存方式:密封置於冷凍-18度以下即可</br></br>保存期限:30天</br></br>烹煮流程:不須解涷直接放入滾水中，開大火輕輕翻動水餃避免黏鍋，靜待6~8分鐘即可</br></br></font><font size="5" color='red'>本店餡料使用台灣豬肉</br>不添加防腐劑及人工香料</font></p>
<input type=submit name=submit value="加入購物車">&nbsp&nbsp<input type="number" size="2" name="number" min="1" max="10">&nbsp&nbsp310元/包
</form>
</div>
</div>
</div>
</div>
</div>
<?php
if(isset($_POST["number"])){
    if($_POST["number"]!=null){
        $one=310;
        $number=$_POST["number"];
        $money=$number*$one;
        $_SESSION["type"]="綜合水餃";
        $_SESSION["number"]=$number;
        $_SESSION["money"]=$money;
        echo "<script> {window.alert('商品已放入購物車');location.href='insert.php'} </script>";
    }
    else{
        echo "請選擇正確數量";
    }
}
?>
</body>
</div>
</html>