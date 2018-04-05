<?php


session_start();




require 'class/connection.php';

connect();


function export_excel_csv($sql)
{
   $data = "";
   $header = "";
  
    $rec = mysqli_query($GLOBALS["___mysqli_ston"], $sql) or die (((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
    $num_fields = (($___mysqli_tmp = mysqli_num_fields($rec)) ? $___mysqli_tmp : false);
    for($i = 0; $i < $num_fields; $i++ )
    {
        $header .= ((($___mysqli_tmp = mysqli_fetch_field_direct($rec, $i)->name) && (!is_null($___mysqli_tmp))) ? $___mysqli_tmp : false)."\t";
    }
    while($row = mysqli_fetch_row($rec))
    {
        $line = '';
        foreach($row as $value)
        {                                            
            if((!isset($value)) || ($value == ""))
            {
                $value = "\t";
            }
            else
            {
                $value = str_replace('"','""', $value );
                $value = '"'.$value.'"'."\t";
            }
            $line .= $value;
        }
        $data .= trim( $line ) . "\n";
    }
  $data = str_replace("\r" , " " , $data);
    if ($data == "")
    {
        $data = "\n No Record Found!\n";                        
    }
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=reports.xls");
    header("Pragma: no-cache");
    header("Expires: 0");
    print $header."\n".$data;
}

          // $chkbox = $_POST['chk1']; // Get Check Box Value 
   //  $no = count($chkbox); // Get No of Check Box Selected
   //  $all=  implode(",", $chkbox); // Divide Array into Chunks

     //echo "Total Field Selected " . $no. "<br>";
     //echo "You have selected these fields " . $all;

          //  echo "<br>"; 

     
     
$noof = $_SESSION['noof'] ;
$fname  = $_SESSION['fieldname'];
$uid =    $_SESSION["uid"];


mysqli_query($GLOBALS["___mysqli_ston"], "insert into sold_leads (fieldname,noof,buyerid) values ('{$fname}','{$noof}','{$uid}')") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));


export_excel_csv(" select ".$fname." from leads_usa  where lead_id > 1  limit  ".$noof. " ") or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));

?>
