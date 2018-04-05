<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


define("server_name", "localhost");
define("server_user","root");
define("server_password","");
define("database_name", "lms");




function connect()
{
    
    ($GLOBALS["___mysqli_ston"] = mysqli_connect(server_name,  server_user,  server_password)) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    
    ((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('database_name'))) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    
    
}
?>
