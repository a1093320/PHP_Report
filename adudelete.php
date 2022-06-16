<?php
    session_start();
    if(isset($_SESSION["admin"])){
        if($_SESSION["admin"]!="Yes"){
            header("Location:index.php");
        }
    }else{
        header("Location:index.php");
    }
?>

<?php
require("connect.php");
$del=$_GET['uNo'];
//echo $del;
$SQL ="DELETE FROM user WHERE uNo='$del'"; 
$result=mysqli_query($link,$SQL);
mysqli_close($link);
echo "<script> {window.alert('用戶已刪除');location.href='aduser.php'} </script>";

?>
<?php
    //echo $del;
    //mysqli_close($link);
?>