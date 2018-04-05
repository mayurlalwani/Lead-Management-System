<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

require 'class/connection.php';


connect();

$uname = $_POST["uname"] ;
$pass = $_POST["pass"] ;


$q = mysqli_query($GLOBALS["___mysqli_ston"], "select * from admin where admin_name = '{$uname}' and admin_pass ='{$pass}'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false))); 

$data = mysqli_fetch_row($q);

if($data > 0)
{
    $_SESSION["uname"] = $uname;
    
    
    header("location:home.php");
}else if($data == 0)
{
        
    header("location:login.php?s=fail");
    
}else
{
    
    header("location:login.php?s=fail");
    
    
    
}
?>
