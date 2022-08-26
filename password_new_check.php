<!--password_new_check.php-->
<?php
  session_start();
  $user_password = $_SESSION["user_password"];
  $user_number=$_SESSION["user_number"];
  $current_password = $_POST["current_password"];
  $new_password = $_POST["new_password"];
  $new_password2 = $_POST["new_password2"];

  // 현재 비밀번호 같을 경우
  if($current_password==$user_password){
    //현재 비밀번호와 새 비밀번호가 같을 경우
    if($current_password==$new_password){
      echo '
      <script>
        alert("현재 비밀번호와 새비밀번호가 일치합니다. 다시 입력해주세요");
        history.back();
      </script>';
    }
    else{
      // 새 비밀번호와 비밀번호 확인이 같을 경우
        if($new_password==$new_password2){ 
          $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
          $sql = "update users set user_password='$new_password' where user_number='$user_number' ;";
          mysqli_query($con, $sql);
          mysqli_close($con);
          echo '
            <script>
              alert("비밀번호가 변경되었습니다. 다시 로그인 해주세요.");
              location.replace("./login.php");
            </script>';
            session_destroy();
        }
        // 새 비밀번호와 비밀번호 확인이 다른 경우
        else{
          echo '
          <script>
            alert("새비밀번호를 다시 확인해주세요.");
            history.back();
          </script>';
        }
    }
    
  }
  // 현재 비밀번호 틀린 경우
  else{
    echo '
    <script>
      alert("현재 비밀번호와 일치하지 않습니다.");
      history.back();
    </script>';
  }


?>
