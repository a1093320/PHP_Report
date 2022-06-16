<?php
    session_start();
    require("connect.php");
    $uId=$_SESSION["uId"];
    $email=$_SESSION["aemail"];
    $tel=$_SESSION["atel"];
?>
<?php
    if($_SESSION["db"]!="Yes"){
        header("Location:login.php");
    }
?>
<?php
    $SQL="UPDATE user SET Uemail='$email',Utel='$tel' WHERE uName='$uId'";
    $result=mysqli_query($link,$SQL);
    mysqli_close($link);
    header("Location:account.php");
?>
