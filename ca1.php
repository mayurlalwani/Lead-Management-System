<?php
$con=mysql_connect('localhost','root','')or die("not connected to db");
$db=mysql_select_db("lms",$con);

if(isset($_POST['sub']))
{

$pid=$_POST['pid'];
$con=mysql_connect('localhost','root','')or die("not connected to db");
$db=mysql_select_db("lms",$con);

//$total=0;
$query=mysql_query("SELECT * FROM leads_file WHERE leadfileid=$pid");
while($row=mysql_fetch_array($query))
	{
      //$sa=$row['sellamount'];
	  echo '<br>';
	  echo "you have selected file no. : ".$row['leadfileid'];
echo '<br>';
	  echo "you have to pay : ".$row['sellamount'];

//$total=$total*$sa;

//echo "your final total is : ".$total;


	}



//echo $pid;


}

else
{

echo 'you have to select file';

}
?>