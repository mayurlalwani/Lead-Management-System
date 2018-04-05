<?php
require 'class/connection.php';
connect();
 
function mysql_table_field_names(  )
{
   $link = mysql_connect("localhost", "root", "");
$db=mysql_select_db("lms", $link);
//$total_fields = (int) (($___mysqli_tmp = mysqli_num_fields( mysqli_query($GLOBALS["___mysqli_ston"],  "SELECT * FROM leads_usa"))) ? $___mysqli_tmp : false);
$total_query=mysql_query("SELECT * FROM leads_usa",$link);
$total_fields=mysql_num_fields($total_query);
	$names = array();


for ( $i = 0; $i < $total_fields; $i++ )
{
    $pq = mysqli_query($GLOBALS["___mysqli_ston"] "select * from leads_usa where lead_id = 1");
            $price = mysqli_fetch_row($pq);
              $names[] = ((($___mysqli_tmp = mysqli_fetch_field_direct( mysqli_query($GLOBALS["___mysqli_ston"],  "SELECT * FROM leads_usa"), $i)->name) && (!is_null($___mysqli_tmp))) ? $___mysqli_tmp : false);
              if($i==0)
              {
                
                  
               }
              else
              {
                  echo "<td>$i)<input type='checkbox' name='chk1[]' value='$names[$i]'> $names[$i]</td><td> $price[$i]</td>";
              
              }
}

}
?>
 
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
$link = mysql_connect("localhost", "root", "");
mysql_select_db("lms", $link);
            $qq = mysql_query("select ".$all." from leads_usa where $alland  != ' ' ",$link);
            
           //    echo $qq;
           // $q = mysqli_query($GLOBALS["___mysqli_ston"], $qq) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

            
            $noofrecords = mysql_num_rows($qq);
            
            
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


            echo "<form method='post' action='cla1.php'>";
            
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
                        <form method="post" action="list.php">
 
                                 <?php
                                 mysql_table_field_names();
                                ?>
                                 <br>
                            <input type="submit" value="Submit Fields">  
                        </form>
                    <?php
                    }
                    ?>