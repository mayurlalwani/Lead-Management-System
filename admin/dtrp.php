<?php 
$con=mysql_connect('localhost','root','') or  die("not connected");
$db=mysql_select_db("lms",$con);
  $sdate = $_POST["sdate"];
                           $edate = $_POST["edate"];

$query=mysql_query("SELECT * FROM leads_file,sold_files WHERE leads_file.leadfileid=sold_file.fileid and solddate between '$sdate' and '$edate' ",$con);

while($row=mysql_fetch_array($query))
{


echo $row['leadfilename'];

}


?>