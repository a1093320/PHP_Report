<?php
    session_start();
    require("connect.php");
?>
<?php
    $uName=$_SESSION['uId'];
    $utype=$_SESSION['type'];
    $unumber=$_SESSION['number'];
    $umoney=$_SESSION['money'];
    $SQL="SELECT * FROM car WHERE uName='$uName' AND utype='$utype'";
    $result=mysqli_query($link,$SQL);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_row($result);
        //echo $row;
        $unumber=$unumber+$row[3];
        $umoney=$umoney+$row[4];
        $SQL="UPDATE car SET unumber='$unumber',umoney='$umoney' WHERE utype='$utype' AND uName='$uName'";
        $result=mysqli_query($link,$SQL);
        mysqli_close($link);
        //echo $unumber.$umoney;
        echo "<script>history.back(-1)</script>";
    }
    else{
/*     $user=$SESSION["uId"];
    $type=$_SESSION["type"];
    $number=$_SESSION["number"]
    $money=$_SESSION["money"]; */
        $SQL="INSERT INTO car (uName,utype,unumber,umoney) VALUES ('$uName','$utype','$unumber','$umoney')";
        $result=mysqli_query($link,$SQL);
        mysqli_close($link);
        echo "<script>history.back(-1)</script>";
    }
?>
  
            