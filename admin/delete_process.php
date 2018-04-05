<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require 'class/connection.php';
connect();

$did = $_GET['did'];

mysqli_query($GLOBALS["___mysqli_ston"], "delete from registration where uid = '{$did}'");

header("location:users.php");

?>
