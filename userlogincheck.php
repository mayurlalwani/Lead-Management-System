<?php
session_start();



require 'class/connection.php';

connect();

$uname = $_POST['txt1']; 
$pass= $_POST['txt2'];

$q = mysqli_query($GLOBALS["___mysqli_ston"], "select * from registration where email = '{$uname}' and pwd = '{$pass}'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

$data = mysqli_fetch_row($q); /*or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));*/

if($data>0)
{
   
    if($data[12]== "Buyer")
    {
        
        $_SESSION["buyer"] = $uname; 
         $_SESSION["uid"]=$data[0];
        header("location:buyer/home.php");
         
    }
    
  
    if($data[12]== "Seller")
    {
          $_SESSION["seller"] = $uname; 
          $_SESSION["uid"]=$data[0];
           header("location:seller/home.php");
        
    }
      if($data[12]== "Affiliate")
    { 
          $_SESSION["uid"]=$data[0];
          $_SESSION["affiliate"] = $uname; 
          
           header("location:Affiliate/buyer.php");
        
    }
	
	
}
if($data == 0)
{
        
    header("location:login.php?s=fail");
    
}//else
//{
    
  //  header("location:login.php?s=fail");
    
    
    
//}
?>