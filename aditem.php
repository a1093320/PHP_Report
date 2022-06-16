<?php
session_start();
if(isset($_SESSION["admin"])){
    if($_SESSION["admin"]!="Yes"){
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}
$state=$_SESSION["ustate"];
require("connect.php");
$upt=$_SESSION["UNo"];
//echo $del;
$SQL="UPDATE item SET ustate='$state' WHERE uNo='$upt'";
$result=mysqli_query($link,$SQL);
mysqli_close($link);
echo "<script> {window.alert('訂單修改完成');location.href='admin.php'} </script>";

?>
<?php
   // mysqli_close($link);
?>