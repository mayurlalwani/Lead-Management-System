 <?php 






$_SESSION['noof'] = $_POST['howmany'];
$_SESSION['fieldname']= $_POST['fname'];

$noof =  $_POST['howmany'];
$fieldname =  $_POST['fname'];
$available = $_POST["available"];

if($noof > $available)
{
    
    header("location:list.php?s=max");
    
}

if(!isset($noof))
{
    header("location:list.php");
    
}
    $link = mysql_connect("localhost", "root", "");
$db=mysql_select_db("lms", $link);
$qr = mysql_query( "select $fieldname from leads_usa where lead_id = 1",$link);

$qp =  mysql_fetch_row($qr);
$sum = array_sum($qp);


$totalamount = $sum*$noof;

echo '<br>';
echo 'you have selected these fields : ' . $fieldname;
echo '<br>';
echo 'number of records are : ' . $noof;
echo '<br>';
echo 'total : $ '.$totalamount;

echo '<form action="dow.php"  method="post" id="myform">';
echo "<input  name='totalamount' type='hidden' value='{$totalamount}'>";
echo "<input  name='fname' type='hidden' value='{$fieldname}'>";
echo '<input type="submit" value="download">';
echo '</form>';

?>

