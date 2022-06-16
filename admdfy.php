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
<title>管理員 訂單修改</title>
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
    $del=$_GET['uNo'];
    //$uName=$_SESSION['uId'];
    $SQL="SELECT * FROM item WHERE uNo='$del'";
    $result=mysqli_query($link,$SQL);
    //$row=mysqli_fetch_assoc($result)
?>
<center>
<font size="10">訂單管理</font>
</br></br>
<table style="width:50%">
<tr>
<th><center><font size='5'>用戶名稱</font></center></th><th><center><font size='5'>地址</font></center></th><th><center><font size='5'>電話</font></center></th><th><center><font size='5'>品項</font></center></th><th><center><font size='5'>數量</font></center></th><th><center><font size='5'>貨態</font></center></th><th><center><font size='5'>金額</font></center></th>
</tr>
<form action="" method="post" enctype="multipart/form-data">
<?php
    while($row=mysqli_fetch_assoc($result)){
        $uNo=$row['uNo'];
        $uId=$row['uName'];
        $type=$row['utype'];
        $local=$row['Ulocal'];
        $money=$row['umoney'];
        $tel=$row['Utel'];
        $number=$row['unumber'];
        //$state=$row['ustate'];
		echo "<tr>";
		echo "<td><center><font size='3'>".$uId."</font></center></td>";
		echo "<td><center><font size='3'>".$local."</font></center></td>";
        echo "<td><center><font size='3'>".$tel."</font></center></td>";
        echo "<td><center><font size='3'>".$type."</font></center></td>";
        echo "<td><center><font size='3'>".$number."</font></center></td>";
        echo "<td><center><font size='3'><select name='state'><option value='已出貨'>已出貨</option><option value='未出貨'>未出貨</option><option value='訂單已完成'>訂單已完成</option></select></font></center></td>";
        echo "<td><center><font size='3'>".$money."</font></center></td>";
		echo "</tr>";
    }
?>
</table>
</br>
<center><a href="admin.php"><input type="button" value="返回"></a>&nbsp<input type="submit" value="儲存變更">&nbsp</center>
</form>

<?php
    //$a=$_POST["state"];
    //echo $a;
    mysqli_close($link);
    if(isset($_POST["state"])){
        //echo "success";
        $_SESSION["ustate"]=$_POST["state"];
        $_SESSION["UNo"]=$uNo;
        echo "<script> {location.href='aditem.php'} </script>";
    }
    else{
        //header("Location:admin.php");
    }
?>

</center>
</body>
</html>