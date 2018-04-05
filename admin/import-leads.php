<?php  


require 'class/connection.php';

connect();

if($_POST)
{
    
if ($_FILES[csv][size] > 0) { 

    //get the csv file 
    $file = $_FILES[csv][tmp_name]; 
    $handle = fopen($file,"r"); 
     
    
    $no = 0;
    //loop through the csv file and insert into database 
    do { 
        
        if($no == 0){
            
        }
        
        
        else if ($no == 1){
            
        }
        else
        {
            mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO leads_usa (firstname, lastname, email, address, city, state, zip, dob, homephone, workphone, ssn, dlno, dlstate, employmentstatus, empname, incometype, income, payperiod, empyears, empmonths, resyears, resmonths, ipaddress, bankname, accountno, routingno, credit_debit_card_no, cvv, expirydate) VALUES 
                ( 
                    '".addslashes($data[0])."', 
                    '".addslashes($data[1])."', 
                    '".addslashes($data[2])."',
                    '".addslashes($data[3])."',
                    '".addslashes($data[4])."',
                    '".addslashes($data[5])."',
                    '".addslashes($data[6])."',
                    '".addslashes($data[7])."',
                    '".addslashes($data[8])."',
                    '".addslashes($data[9])."',
                    '".addslashes($data[10])."',
                    '".addslashes($data[11])."',
                    '".addslashes($data[12])."',
                    '".addslashes($data[13])."',
                    '".addslashes($data[14])."',
                    '".addslashes($data[15])."',
                    '".addslashes($data[16])."',
                    '".addslashes($data[17])."',
                    '".addslashes($data[18])."',
                    '".addslashes($data[19])."',
                    '".addslashes($data[20])."',
                    '".addslashes($data[21])."',
                    '".addslashes($data[22])."',
                    '".addslashes($data[23])."',
                    '".addslashes($data[24])."',
                    '".addslashes($data[25])."',
                    '".addslashes($data[26])."',
                    '".addslashes($data[27])."',
                    '".addslashes($data[28])."'
                ) 
            "); 
       
        }   
            $no++;
    } while ($data = fgetcsv($handle,1000,",","'")); 
    // 

    //redirect 
   
    header('Location: import.php');
    
    
} 

}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title></title>
        <?php
        include 'include_theme/head_scripts.php';
        ?>
    </head>

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

                                <h3>Upload Leads</h3>

                            </div>






                            

  
<form method="post" enctype="multipart/form-data" name="form1" id="myform"> 
  Choose your CSV file: <br /> 
  <input name="csv" type="file" id="csv" class="required" /> <br>
  <input type="submit" name="Submit" value="Submit" /> 
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