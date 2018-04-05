<?php

$totalamount = $_POST["totalamount"];



$_SESSION['list'] = $totalamount;

if(!isset($totalamount))
{
    header("location:list_all_fields.php");
    
}


?>


<html>
<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="duanetooker1635@yahoo.com">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="Leads">
<input type="hidden" name="return" value="http://localhost/Niraj/admin/12.php" />
<input type="hidden" name="cancel_return" value="http://localhost/Niraj/admin/index.php" />
<input type="hidden" name="amount" value="<?php echo $totalamount; ?>" />
<input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!"/>

</form>
                
</html>