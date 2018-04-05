<?php 

require 'class/connection.php';
connect();

if(isset($_GET['s']))
{
    echo "<script>";
    echo"alert('Not Data Available')";
    echo "</script>";
    
    header("Refresh: 0; url=list_all_fields.php");
}

function mysql_table_field_names( $one )
{
    
 // This Function is used for Get List of Tables Fields 
   // You have to pass table name a
	$total_fields = (int) (($___mysqli_tmp = mysqli_num_fields( mysqli_query($GLOBALS["___mysqli_ston"],  "SELECT * FROM $one"))) ? $___mysqli_tmp : false);
	$names = array();
        
        echo "<table>";

            echo "<tr>";
            
                
            echo "<th>Field Name</th><th>Price</th>";
           echo "</tr>";
	for ( $i = 0; $i < $total_fields; $i++ )
        {
            
            echo "<tr>";
      
            
            $pq = mysqli_query($GLOBALS["___mysqli_ston"], "select * from $one where lead_id = 1");
            $price = mysqli_fetch_row($pq);
              $names[] = ((($___mysqli_tmp = mysqli_fetch_field_direct( mysqli_query($GLOBALS["___mysqli_ston"],  "SELECT * FROM $one"), $i)->name) && (!is_null($___mysqli_tmp))) ? $___mysqli_tmp : false);
              if($i==0)
              {
                
                  
               }
              else
              {
                  echo "<td>$i)<input type='checkbox' name='chk1[]' value='$names[$i]'> $names[$i]</td><td> $price[$i]</td>";
              
              }
                
         
                
        echo "</tr>";
        
        }
      
        echo "</table>";
	//eturn $names;
        
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
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
                    
                    	<h3>Available Fields (USA)</h3>
                    
                    </div>
                 
                  
                        
                                
                               <?php 
if($_POST)
{
     $chkbox = $_POST['chk1']; // Get Check Box Value 
     $no = count($chkbox); // Get No of Check Box Selected
     $all =  implode(",", $chkbox); // Divide Array into Chunks

     $alland = implode(" != ' ' and   ",$chkbox);
    // echo $all;
     echo "<br>";
     //echo $alland;
   //  echo "Total Field Selected " . $no. "<br>";
     echo "<h3>You have selected these $no fields " . $all."</h3>";

            echo "<br>";
            //$q = "select ".$all." from leads_usa";

            $qq = "select ".$all." from leads_usa where $alland  != ' ' ";
            
           //    echo $qq;
            $q = mysqli_query($GLOBALS["___mysqli_ston"], $qq) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

            
            $noofrecords = mysqli_num_rows($q);
            
            
            echo "<h3>No of Records $noofrecords</h3>";
            
            
      //    echo "<table border='2'>";
            
            
        // while($data = mysql_fetch_row($q))
         //  {
            //   echo "<tr>";
            //   for($i=0;$i<$no;$i++)
            //   {

              ///  echo "<td>$data[$i]</td>";

           //  }
          ///     echo "</tr>";
         ///  }
         //  echo "<table>";


            echo "<form method='post' action='calculate.php'>";
            
            echo "<input type='hidden' name='available' value='{$noofrecords}'>";
            echo "<input type='hidden' name='fname' value='{$all}'>";
            echo "<input type='text' name='howmany'>";
            echo "<input type='submit'>";
            echo "</form>";
            

            //die(); // Used for Skip Other part Execution 
    
}
?>

         
                 
                    
                    <?php 
                    if(!$_POST)
                    {
                    ?>
                        <form method="post">
 
                                <?php
                                 mysql_table_field_names("leads_usa");
                                ?>
                                 <br>
                            <input type="submit" value="Submit Fields">  
                        </form>
                    <?php
                    }
                    ?>
                       
                        
                     
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