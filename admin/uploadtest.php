<?php

require 'class/connection.php';
connect();

$fieldseparator = ",";
$lineseparator = "\n";
$csvfile = "Tasks.csv";

$addauto = 1;

$save = 1;
$outputfile = "output.sql";
/********************************/


if(!file_exists($csvfile)) {
echo "File not found. Make sure you specified the correct path.\n";
exit;
}

$file = fopen($csvfile,"r");

if(!$file) {
echo "Error opening data file.\n";
exit;
}

$size = filesize($csvfile);

if(!$size) {
echo "File is empty.\n";
exit;
}

$csvcontent = fread($file,$size);

fclose($file);

include("db.php");

$lines = 0;
$queries = "";
$linearray = array();

foreach(split($lineseparator,$csvcontent) as $line) {

$lines++;

$line = trim($line," \t");

$line = str_replace("\r","",$line);


$linearray = explode($fieldseparator,$line);

$linemysql = implode("','",$linearray);

if($addauto)
$query = "insert into $databasetable values('','$linemysql');";
else
$query = "insert into $databasetable values('$linemysql');";

$queries .= $query . "\n";

@mysqli_query($GLOBALS["___mysqli_ston"], $query);
}

@((is_null($___mysqli_res = mysqli_close($con))) ? false : $___mysqli_res);

if($save) {

if(!is_writable($outputfile)) {
echo "File is not writable, check permissions.\n";
}

else {
$file2 = fopen($outputfile,"w");

if(!$file2) {
echo "Error writing to the output file.\n";
}
else {
fwrite($file2,$queries);
fclose($file2);
}
}

}
