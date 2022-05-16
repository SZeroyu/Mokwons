<!--personal_data_check.php-->

<?php
  $user_number  = $_POST["user_number"];
  $user_password = $_POST["user_password"];

  $user_name = $_POST["user_name"];
  $user_birthday = $_POST["user_birthday"];

  $user_pnumber = $_POST["user_pnumber"];
  $user_hnumber = $_POST["user_hnumber"];

  $user_address = $_POST["user_address"];
  $user_address_number = $_POST["user_address_number"];

  $user_email = $_POST["user_email"];

  $user_grade = $_POST["user_grade"];
  $user_status = $_POST["user_status"];
  $user_affiliation = $_POST["user_affiliation"];

  $user_major = $_POST["user_major"];
  $user_minor = $_POST["user_minor"];
  $user_double_major = $_POST["user_double_major"];

  $user_admission = $_POST["user_admission"];
  $user_semester = $_POST["user_semester"];
  $user_class = $_POST["user_class"];
  $user_teacher = $_POST["user_teacher"];
                               
  $con = mysqli_connect("localhost", "root", "", "project") or die("fail");

  $sql = "update users set
    user_number = '$user_number',
    user_password = '$user_password',

    user_name = '$user_name',
    user_birthday = '$user_birthday'

    user_pnumber = '$user_pnumber',
    user_hnumber = '$user_hnumber',

    user_address = '$user_address',  
    user_address_number = '$user_address_number',

    user_email = '$user_email',

    user_grade = '$user_grade',
    user_status = '$user_status',
    affiliation = '$user_affiliation',

    user_major = '$user_major',
    user_minor = '$user_minor',
    user_double_major = '$user_double_major',

    user_admission = '$user_admission',
    user_semester = '$user_semester',
    user_class = '$user_class',
    user_teacher = '$user_teacher',
    where user_number='$user_number'; ";

  mysqli_query($con, $sql);
  mysqli_close($con);
 
 ?>
 
 <script> alert("회원정보가 수정되었습니다."); </script>
 <script> location.replace("./search_data.php"); </script>
