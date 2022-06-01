<!--personal_data_check.php-->

<?php
   session_start();
   $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
   
     $user_number  = mysql_real_escape_String($_GET["user_number"]);
     $user_password  = mysql_real_escape_String($_POST["user_password"]);
     $user_name = mysql_real_escape_String($_POST["user_name"]);
     $user_address = mysql_real_escape_String($_POST["user_address"]);
     $user_address_number = mysql_real_escape_String($_POST["user_address_number"]);
     $user_pnumber = mysql_real_escape_String($_POST["user_pnumber"]);
     $user_hnumber = mysql_real_escape_String($_POST["user_hnumber"]);
     $user_email = mysql_real_escape_String($_POST["user_email"]);
     $user_birthday = mysql_real_escape_String($_POST["user_birthday"]);
     $pass=md5($pass);
   
       
     
       $sql = "update users set
       user_name = '$user_name',
       user_address = '$user_address',  
       user_address_number = '$user_address_number',
       user_pnumber = '$user_pnumber',
       user_hnumber = '$user_hnumber',
       user_email = '$user_email',
       user_birthday = '$user_birthday'
       where user_number='$user_number' and user_password='$user_passwoed'; ";
   
   
   
  mysqli_query($con, $sql);
  if(mysqli_affected_rows($con)==0){

  }else{
    close(); 
  }
  mysqli_close($con);

 
 ?>
 

