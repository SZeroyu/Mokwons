<!--향후 회원가입은 관리자만 가능하게 수정;-->
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

  $sql = "insert into users(user_number, user_password, user_name, user_birthday, user_pnumber, user_hnumber, 
  user_address, user_address_number, user_email, user_grade, user_status,
    user_affiliation, user_major, user_minor, user_double_major, user_admission, user_semester,
    user_class, user_teacher)";

  $sql .= "values('$user_number', '$user_password', '$user_name', '$user_birthday', '$user_pnumber', '$user_hnumber',
  '$user_address', '$user_address_number', '$user_email', '$user_grade', '$user_status',
      '$user_affiliation', '$user_major', '$user_minor', '$user_double_major', '$user_admission',
      '$user_semester', '$user_class', '$user_teacher')";

  mysqli_query($con, $sql);
  mysqli_close($con);
?>
           <script>
            alert("완료했습니다");
            location.href='registration.php';
          </script>

