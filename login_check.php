<?php
  session_start();
  $user_number = $_POST["user_number"];
  $user_password = $_POST["user_password"];

  $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
  $sql = "select * from users where user_number='$user_number';";
  $res = mysqli_query($con, $sql) or die(mysqli_error($con));

  if (mysqli_num_rows($res) == 1) {
    $row = mysqli_fetch_assoc($res);
    if ($row["user_password"] == $user_password) {
        $_SESSION["user_number"] = $user_number;
        if (isset($_SESSION["user_number"])){
          if($user_number == 'admin'){
              $_SESSION["user_password"] = $user_password;
            echo '
              <script>
                alert("로그인 되었습니다.");
                location.replace("./admin_main.php");
              </script>';
          } else{
              $_SESSION["user_password"] = $user_password;
            echo '
              <script>
                alert("로그인 되었습니다.");
                location.replace("./main.php");
              </script>';
          }

        } else {
            echo "세션 실패함.";
          }
    } else {
        echo '
          <script>
            alert("아이디 혹은 비밀번호가 틀립니다.");
            history.back();
          </script>';
      }
}
?>
