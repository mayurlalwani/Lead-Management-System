
<?php
		$connect=mysql_connect("localhost","root","");
		mysql_select_db("lmsdemo",$connect);


		if($_POST)
		{
		 $chkbox = $_POST['chk1'];
		 $no = count($chkbox); // Get No of Check Box Selected
		  $all =  implode(",", $chkbox);
		   $alland = implode(" != ' ' and   ",$chkbox);
		  echo "<br>";
		  echo "You have selected these $no fields " . $all;
echo "<br>";
		  $qq = "select ".$all." from leads_usa where $alland  != ' ' ";

		 $q = mysql_query($qq);
		 $noofrecords = mysql_num_rows($q);
		echo "<br>No of Records $noofrecords";

echo "<form method='post' action='cla1.php'>";
            
            echo "<input type='hidden' name='available' value='{$noofrecords}'>";
            echo "<input type='hidden' name='fname' value='{$all}'>";
            echo "<input type='text' name='howmany'>";
            echo "<input type='submit'>";
            echo "</form>";
		}






function runs()
{
$list="select * from leads_usa where lead_id > 1";
		$listresult=mysql_query($list);
	$no=mysql_num_fields($listresult);
$names = array();
echo "<table border=1 cellpadding=5>";
	for( $i = 0; $i < $no; $i++ )
        {
			echo "<tr>";
			$price=mysql_query("select * from leads_usa where lead_id = 1");
			$pr=mysql_fetch_row($price);
			$names[] = mysql_fetch_field(mysql_query("SELECT * FROM leads_usa"), $i);
			//echo $names[$i]->name;
			echo "<td>$i)</td><td><input type=\"checkbox\" name=\"chk1[]\" value=".$names[$i]->name.">".$names[$i]->name."</td><td>$pr[$i]</td></tr>";
		}
		
echo "</table>";
}
if(!isset($_POST['submits']))
{
	echo " <form method=\"post\">";
runs();
echo "<input type=submit value=Submit name=submits>

				</form>";
}
?>	
