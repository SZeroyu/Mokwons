<!--personal_data_check.php-->
<?php
  $user_name = $_POST["user_name"];
  $user_address = $_POST["user_address"];
  $user_address_number = $_POST["user_address_number"];
  $user_pnumber = $_POST["user_pnumber"];
  $user_hnumber = $_POST["user_hnumber"];
  $user_email = $_POST["user_email"];
  $user_bank_number = $_POST["user_bank_number"];
  $user_bank = $_POST["user_bank"];
  $user_birthday = $_POST["user_birthday"];

  $con = mysqli_connect("localhost", "root", "", "project") or die("fail");

  $sql = "insert into personal_data(user_name, user_address, user_address_number,
    user_pnumber, user_hnumber, user_email, user_bank_number,
    user_bank, user_birthday)";

  $sql .= "values('$user_name', '$user_address', '$user_address_number',
    '$user_pnumber', '$user_hnumber', '$user_email', '$user_bank_number',
    '$user_bank', '$user_birthday')";

  mysqli_query($con, $sql);
  mysqli_close($con);
  // 향후 회원가입은 관리자만 가능하게 수;
 ?>
           <script>
            alert("완료했습니다");
            history.back();
          </script>'
