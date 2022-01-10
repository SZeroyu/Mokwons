<?php
  session_start();
  $user_number = $_POST["user_name"];
  $user_password = $_POST["user_birthday"];

  $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
  $sql = "select * from personal_data where user_name='$user_name';";
  $res = mysqli_query($con, $sql) or die(mysqli_error($con));

  if (mysqli_num_rows($res) == 1) {
    $row = mysqli_fetch_assoc($res);
    if ($row["user_birthday"] == $user_birthday) {
      $row["user_number"] = $user_number;
      $_SESSION["user_number"] = $user_number;
      echo '
        <script>
          alert("학번은' $user_number '입니다.");
          history.back();
        </script>';
    } else {
        echo '
          <script>
            alert("찾을 수 없는 이용자입니다. 이름 혹은 생년월일을 확인해주세요.");
            history.back();
          </script>';
      }
}
?>
