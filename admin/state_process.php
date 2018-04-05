<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require 'class/connection.php';
connect();

if(isset($_GET['update']))
{
    $id2 = $_POST['id'];
    $sname = $_POST['sname'];
    $cname = $_POST['cname'];
    
    mysqli_query($GLOBALS["___mysqli_ston"], "update state set state_name = '{$sname}', co_id = '{$cname}' where state_id = '{$id2}'") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    header("location:state_display.php");
}
?>
