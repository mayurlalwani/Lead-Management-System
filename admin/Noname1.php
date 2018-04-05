<?php
$connect = mysql_connect("localhost", "root", ""); 
mysql_select_db("lmsdemo",$connect); //select the table 
// 

if($_POST)
{
    
if ($_FILES['csv']['size'] > 0) { 

    //get the csv file 
    $file = $_FILES['csv']['tmp_name']; 
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
            mysql_query("INSERT INTO leads_usa (firstname, lastname, email, address, city, state, zip, dob, homephone, workphone, ssn, dlno, dlstate, employmentstatus, empname, incometype, income, payperiod, empyears, empmonths, resyears, resmonths, ipaddress, bankname, accountno, routingno, credit_debit_card_no, cvv, expirydate) VALUES 
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
   
   // header('Location: import.php');
    
    
} 

}
?>





<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
  Choose your file: <br /> 
  <input name="csv" type="file" id="csv" /> 
  <input type="submit" name="Submit" value="Submit" /> 
</form> 