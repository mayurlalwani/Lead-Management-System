<?php

$con=mysql_connect('localhost','root','')or die("not connected to db");
$db=mysql_select_db("lms",$con);

$query=mysql_query("SELECT * FROM leads_file");


echo '<br>';
while($row=mysql_fetch_array($query))
{
echo '<br>';
echo "file name : ". $row['leadfilename'];
echo '<br>';
echo "amount : ".$row['amount'];
echo '<br>';
echo "details : ".$row['desc'];
echo '<br>';
echo "sell amount : ".$row['sellamount'];
echo '<br>';
$id=$row['leadfileid'];
//echo $id;
echo '<form method="post" action=ca1.php>';
echo '<input type="hidden" name="pid" value='.$id.'>';
echo '<input type="submit" name="sub" value="BUY this file">';
//echo "<a href=ca1.php?add='".$id."'>BUY this file</a>";
echo '</form>';
}







?>