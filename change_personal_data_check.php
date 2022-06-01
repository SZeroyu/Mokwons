<!--personal_data_check.php-->

<?php

  $user_number  = $_POST["user_number"];
  $user_name = $_POST["user_name"];
  $user_address = $_POST["user_address"];
  $user_address_number = $_POST["user_address_number"];
  $user_pnumber = $_POST["user_pnumber"];
  $user_hnumber = $_POST["user_hnumber"];
  $user_email = $_POST["user_email"];
  $user_birthday = $_POST["user_birthday"];
                               
  $con = mysqli_connect("localhost", "root", "", "project") or die("fail");

  $sql = "update users set
    user_name = '$user_name',
    user_address = '$user_address',  
    user_address_number = '$user_address_number',
    user_pnumber = '$user_pnumber',
    user_hnumber = '$user_hnumber',
    user_email = '$user_email',
    user_birthday = '$user_birthday'
    where user_number='$user_number'; ";

  mysqli_query($con, $sql);
  mysqli_close($con);
  $_SESSION['user_number'] = $user_number;
 ?>
 
 <script> alert("회원정보가 수정되었습니다."); </script>
 <script> location.replace("./change_personal_data.php"); </script>
