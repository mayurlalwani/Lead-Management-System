

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title></title>
        <?php
        include 'include_theme/head_scripts.php';
        ?>
    </head>
<?php  


require 'class/connection.php';

connect();

if($_POST)
{

    $id = $_POST["id"];
    $amount = $_POST["amount"];
  
    $desc = $_POST["desc"];
    
    $sellamount = $amount + ($amount*(20/100));
  
$q = mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE `leads_file` SET `amount`='{$amount}',`desc`='{$desc}',`sellamount`='{$sellamount}'  WHERE `leadfileid` = '{$id}' ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


header("location:leads_file_display.php");
            

}


$eid = $_GET['eid'];

if(!isset($eid))
{
    
header("location:leads_file_display.php");
            

}



$q = mysqli_query($GLOBALS["___mysqli_ston"], "select * from leads_file where leadfileid = '{$eid}'")or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
$edata = mysqli_fetch_row($q); 

?> 
    <body>  
        <?php
        include 'include_theme/top_menu.php';
        ?>

        <div class="main">

            <div class="container_12">

                <div class="grid_12">


                    <?php
                    include 'include_theme/welcome.php';

                    include 'include_theme/sidebar.php';
                    ?>
                    <!--/sidebar-->

                    <div class="grid_9 content omega">

                        <div class="content-box">

                            <div class="content-header">

                                <h3>Lead File Information</h3>

                            </div>






                            

  
<form method="post" enctype="multipart/form-data" name="form1" id="form1"> 
 
    
    <table>
        
        <input type="hidden"  value='<?php echo $edata[0]; ?>'   name="id">
            
        
             <tr>
            
            <td>Amount</td>
            <td><input type="text"  value='<?php echo $edata[4]; ?>'   name="amount" class="required"></td>
            
            
        </tr>
        
             <tr>
            
              <td>Description</td>
              <td><textarea cols="5"  rows="5" name="desc" class="required"> <?php echo $edata[5]; ?></textarea></td>
            
            
            
        </tr>
        
             <tr>
            
            <td></td>
            <td><input type="submit" name="Submit" value="Submit" /> </td>
            
            
        </tr>
        
        
    </table>
    
    
 
  
</form> 

</body> 
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