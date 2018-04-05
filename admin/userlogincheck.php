<?php
session_start();



require 'class/connection.php';

connect();

$uname = $_POST['txt1']; 
$pass= $_POST['txt2'];





$q = mysqli_query($GLOBALS["___mysqli_ston"], "select * from registration where uname = '{$uname}' and pwd = '{$pass}'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


$data = mysqli_fetch_row($q) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


if($data>0)
{
    
     $_SESSION['uid'];
    
    header("location:index.php");

}
else
{
    header("location:userlogin.php");


}

?>