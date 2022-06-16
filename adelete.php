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
$del=$_GET['uNo'];
//echo $del;
$SQL ="DELETE FROM item WHERE uNo='$del'"; 
$result=mysqli_query($link,$SQL);
mysqli_close($link);
echo "<script>history.back(-1)</script>";

?>
<?php
    //echo $del;
    //mysqli_close($link);
?>