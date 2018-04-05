
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <title></title>
   <?php 
   
   include 'include_theme/head_scripts.php';
   ?>
    
    
    
    <?php 


require 'class/connection.php';
connect();



$_SESSION['noof'] = $_POST['howmany'];
$_SESSION['fieldname']= $_POST['fname'];

$noof =  $_POST['howmany'];
$fieldname =  $_POST['fname'];
$available = $_POST["available"];

if($noof > $available)
{
    
    header("location:list_all_fields.php?s=max");
    
}

if(!isset($noof))
{
    header("location:list_all_fields.php");
    
}
    
$qr = mysqli_query($GLOBALS["___mysqli_ston"], "select $fieldname from leads_usa where lead_id = 1");

$qp =  mysqli_fetch_row($qr);
$sum = array_sum($qp);


$totalamount = $sum*$noof;


?>
    
    <style>
		
		
		
		#wrapper
		{
			width:180mm;
			margin:0 15mm;
		}
		
		.page
		{
			height:297mm;
			width:210mm;
			page-break-after:always;
		}

		table
		{
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			border-spacing:0;
			border-collapse: collapse; 
			
		}
		
		table td 
		{
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding: 2mm;
		}
		
		table.heading
		{
			height:50mm;
		}
		
		h1.heading
		{
			font-size:14pt;
			color:#000;
			font-weight:normal;
		}
		
		h2.heading
		{
			font-size:9pt;
			color:#000;
			font-weight:normal;
		}
		
		hr
		{
			color:#ccc;
			background:#ccc;
		}
		
		#invoice_body
		{
			height: 149mm;
		}
		
		#invoice_body , #invoice_total
		{	
			width:100%;
		}
		#invoice_body table , #invoice_total table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
	
			border-spacing:0;
			border-collapse: collapse; 
			
			margin-top:5mm;
		}
		
		#invoice_body table td , #invoice_total table td
		{
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
			padding:2mm 0;
		}
		
		#invoice_body table td.mono  , #invoice_total table td.mono
		{
			font-family:monospace;
			text-align:right;
			padding-right:3mm;
			font-size:10pt;
		}
		
		#footer
		{	
			width:180mm;
			margin:0 15mm;
			padding-bottom:3mm;
		}
		#footer table
		{
			width:100%;
			border-left: 1px solid #ccc;
			border-top: 1px solid #ccc;
			
			background:#eee;
			
			border-spacing:0;
			border-collapse: collapse; 
		}
		#footer table td
		{
			width:25%;
			text-align:center;
			font-size:9pt;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;
		}
	</style>
</head>

<body>  
    <?php 
    
       include 'include_theme/top_menu.php';
    ?>

<div class="main">

    <div class="container_1">
    
    	<div class="grid_12">
        
        	
            <?php 
            
                include 'include_theme/welcome.php';
            
            ?>
           <!--/sidebar-->
            
            <div class="grid_9 content omega">
            
            	<div class="content-box">
                
                	<div class="content-header">
                    
                    	<h3></h3>
                    
                    </div>
    
                    	<div id="wrapper">
    
                    
                    
                    
                    
                    
                    
                    
                    
                   
                        
<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="duanetooker1635@gmail.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="Leads">
<input type="hidden" name="return" value="http://localhost/Niraj/admin/download-leads.php" />
<input type="hidden" name="cancel_return" value="http://localhost/Niraj/admin/index.php" />
<input type="hidden" name="amount" value="<?php echo $totalamount; ?>" />
<input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"/>

</form>
              
    <p style="text-align:center; font-weight:bold; padding-top:5mm;"><h2><center>INVOICE</center></h2></p>
  
    
        <table class="heading" align="left" style="width:100%;">
    	<tbody><tr>
    		<td style="width:80mm;">
                    
		<h1 class="heading">Ace Group</h1>
				<h2 class="heading">
					A-506 TULIP TOWER<br>
					ELLISBRIDGE <br>
                                        AHMEDABAD 380006<br>
					GUJARAT , INDIA<br>
					
					Website : www.aceinfotech.net<br>
					E-mail : niraj@aceinfotech.net<br>
					Phone : +91-8000002443
				</h2>
			</td>
			<td rowspan="2" valign="top" align="right" style="padding:3mm;">
				<table>
					<tbody>
                                            <tr><td>Dated : </td><td><?php  echo date("d-m-Y") ?></td></tr>
					<tr><td>Currency : </td><td>USD</td></tr>
				</tbody></table>
			</td>
		</tr>
    	<tr>
    		<td>
    			<!--<b>Buyer</b> :<br>
    			Client Name<br>
			Client Address
    			<br>
    			City - Pincode , Country<br>-->
    		</td>
    	</tr>
    </tbody></table>
		
		
	<div id="content">
		
		<div id="invoice_body">
			<table>
			<tbody><tr style="background:#eee;">
				<td style="width:8%;"><b>Sl. No.</b></td>
				<td><b>Product</b></td>
				<td style="width:15%;"><b>Quantity</b></td>
				<td style="width:15%;"><b>Rate</b></td>
				<td style="width:15%;"><b>Total</b></td>
			</tr>
			</tbody></table>
			
			<table>
			<tbody><tr>
			    <td style="width:8%;">1</td>
			    <td style="text-align:left; padding-left:10px;">Leads Purchase :    <?php echo $fieldname; ?></td>
			    <td class="mono" style="width:15%;"><?php echo $noof; ?></td><td style="width:15%;" class="mono"><?php echo "$".$sum; ?></td>
			    <td style="width:15%;" class="mono"><?php echo "$".$totalamount; ?></td>
			</tr>			
			<tr>
				<td colspan="3"></td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td colspan="3"></td>
				<td>Total :</td>
				<td class="mono"><?php echo "$".$totalamount; ?></td>
			</tr>
		</tbody></table>
		</div>
		
		
		<table style="width:100%; height:35mm;">
			<tbody><tr>
				<td style="width:65%;" valign="top">
					Payment Information :<br>
					Please make online payment or  cheque payments payable to : <br>
					<b>Ace Group</b>
					<br><br>
					The Invoice is payable within 7 days of issue.<br><br>
				</td>
				<td>
				<div id="box">
					E &amp; O.E.<br>
					For Ace Group<br><br><br><br>
					Authorised Signatory
				</div>
				</td>
			</tr>
		</tbody></table>
	</div>
	
	<br>
	
            
             <form action="download-leads.php"  method="post" id="myform">
                        <?php
                 //   echo "<h3>Selected Field Names <u>$fieldname</u></h3>";
                         //   echo "<h3>Final amount is " . $totalamount ."</h3>";
                        
                            echo "<input  name='totalamount' type='hidden' value='{$totalamount}'>";
                            echo "<input  name='fname' type='hidden' value='{$fieldname}'>";
                            
                            echo "<input type='submit' value='Download File'>";
                            
                            
                            
                            ?>
                             
                        </form>
                                            
	</div>
	
	
                    
                    
      
                    
                
                </div><!--/content-box-->
            
            </div><!--/content-->
    
    	</div><!--/grid-12-->
        
        <div class="clear"></div>
    
    </div><!--/container-->
    
</div><!--/main-->


<?php 

include 'include_theme/footer.php';

?>

</body>
</html>