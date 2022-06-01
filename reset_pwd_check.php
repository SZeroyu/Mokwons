<!--password_new_check.php-->
<?php
  session_start();
  $user_password = $_SESSION["user_password"];
  $new_password = $_POST["new_password"];
  $new_password2 = $_POST["new_password2"];

  if($new_password2 == $new_password){
    #새비밀번호랑 비밀번호 확인이 같다면

    if($new_password == $user_password){
        $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
        $sql = "update users set user_password='$new_password' where user_number='$user_number' ;";
  
        mysqli_query($con, $sql);
        mysqli_close($con);

        echo '
        <script>
          alert("현재 비밀번호와 일치합니다. 다시 입력해주세요");
          history.back();
        </script>';
     
    } else{
        echo '
          <script>
            alert("비밀번호가 변경됨 다시 로그인 해주세요.");
            location.replace("./login.php");
          </script>';
          session_destroy();
      }
  } else{
    #새비밀번호랑 비밀번호 확인이 다르다면
    echo '
      <script>
        alert("새비밀번호를 다시 확인해주세요.");
        history.back();
      </script>';
    }

?>
