

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

                                <h3>Sold File Report</h3>

                            </div>



                            <form method="post"  action="rpt_amountsold1.php" target="_blank">

                                <div class="lileft">
                               

                                        <label>Select Operator</label>
                                        <select name="opr">

                    
                <option value=">" >Greater Than</option>
                <option value="<" >Less Than</option>
				<option value=">=" >Greater Than Equal To</option>
				<option value="<=" >Less Than Equal To</option>
				<option value="=" >Equal To</option>
              
                
                </select>
				</div>
				<label>Enter Amount</label>
                                                <input type="text" name="amt"  class="required" style="border-color: #000000">
                                            </div>


                                            <input type="submit" value="Get Report" style="border-color: #000000">

                                                </form>


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