<?php
    session_start();
if(isset($_SESSION["login"])){
    if($_SESSION["login"]!="Yes"){
        header("Location:login.php");
    }
}else{
    header("Location:login.php");
}
?>

<?php
require("connect.php");
$del=$_GET['cNo'];
//echo $del;
$SQL ="DELETE FROM car WHERE cNo='$del'"; 
$result=mysqli_query($link,$SQL);
mysqli_close($link);
echo "<script>history.back(-1)</script>";
//echo "$del";
?>
<?php
    //echo $del;
    //mysqli_close($link);
?>