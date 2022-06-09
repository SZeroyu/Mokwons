<!--수정한 내용 업데이트 하기-->
<?php
   session_start();
   $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
   

     $user_password  = $_POST["user_password"];
     $user_name = $_POST["user_name"];
     $user_address = $_POST["user_address"];
     $user_address_number = $_POST["user_address_number"];
     $user_pnumber = $_POST["user_pnumber"];
     $user_hnumber = $_POST["user_hnumber"];
     $user_email = $_POST["user_email"];

  
   
       
     
       $sql = "update users set
       user_name = '$user_name',
       user_address = '$user_address',  
       user_address_number = '$user_address_number',
       user_pnumber = '$user_pnumber',
       user_hnumber = '$user_hnumber',
       user_email = '$user_email'";
   
   
   
  mysqli_query($con, $sql);
  if(mysqli_affected_rows($con)==0){

  }else{
    close(); 
  }
  mysqli_close($con);

 
 ?>
 

