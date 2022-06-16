<?php
    session_start();
?>
<?php
if(isset($_SESSION["create"])){
    if($_SESSION["create"]!="yes"){
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}
?>
<?php 
    require("connect.php");
    $_SESSION["ustate"]="未出貨";
    $tel=$_SESSION["tele"];
    $email=$_SESSION["ema"];
    $address=$_SESSION["address"];
    $total=$_SESSION["total"];
    $ustate=$_SESSION["ustate"];
    $ddh=date("YmdHis");

?>
<?php
    $uName=$_SESSION['uId'];
    $SQL="SELECT * FROM car WHERE uName='$uName'";
    $result=mysqli_query($link,$SQL);
    while($row=mysqli_fetch_assoc($result)){
        $cNo=$row['cNo'];
        $type=$row['utype'];
        $number=$row['unumber'];
        $money=$row['umoney'];
        $total=$total+$money;
        $SQL="INSERT INTO item (uName,Ulocal,Utel,utype,unumber,ustate,umoney,id) VALUES ('$uName','$address','$tel','$type','$number','$ustate','$money','$ddh')";
        $result1=mysqli_query($link,$SQL);
    }
    $SQL="DELETE FROM car WHERE uName='$uName'";
    $result=mysqli_query($link,$SQL);
    $_SESSION["complete"]="Yes";
    header("Location:complete.php");
?>
<?php
    mysqli_close($link);
?>