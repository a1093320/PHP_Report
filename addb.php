<?php
    session_start();
    if(isset($_SESSION["admin"])){
        if($_SESSION["admin"]!="Yes"){
            header("Location:index.php");
        }
    }else{
        header("Location:index.php");
    }
    require("connect.php");
    $user=$_SESSION["auser"];
    $pwd=$_SESSION["apwd"];
    $email=$_SESSION["aemail"];
    $tel=$_SESSION["atel"];
    $role=$_SESSION["arole"];
    $SQL="SELECT * FROM user WHERE uName='$user'";
    $result=mysqli_query($link,$SQL);
    $SQL="SELECT * FROM user WHERE Uemail='$email'";
    $result2=mysqli_query($link,$SQL);
    $SQL="SELECT * FROM user WHERE Utel='$tel'";
    $result3=mysqli_query($link,$SQL);
    if(mysqli_num_rows($result)>=1){
        //echo "登入成功";
        echo "<script> {window.alert('此用戶名稱已有人使用');location.href='aduser.php'} </script>";   
    }
    if(mysqli_num_rows($result2)>=1){
        echo "<script> {window.alert('重複申請的email');location.href='aduser.php'} </script>";
    }
    if(mysqli_num_rows($result3)>=1){
        echo "<script> {window.alert('重複申請的電話號碼');location.href='aduser.php'} </script>";
    }
    if(mysqli_num_rows($result)==0&&mysqli_num_rows($result2)==0&&mysqli_num_rows($result3)==0){
        mysqli_close($link);
        require("connect.php");
        $SQL="INSERT INTO user (uName,uPwd,Uemail,Utel,role) VALUES ('$user','$pwd','$email','$tel','$role')";
        $result=mysqli_query($link,$SQL);
        mysqli_close($link);
        echo "<script> {window.alert('用戶新增完成');location.href='aduser.php'} </script>";
    }
?>