<?php
include "./db.php";

$user_number = $_POST['user_number'];
$new_password = $_POST["new_password"];
$new_password2 = $_POST["new_password2"];

if($_POST["user_number"] == ""|| $_POST["new_password"] == "" || $_POST["new_password2"] == "" ){
    echo '<script> alert("정보를 입력하세요"); history.back(); </script>';
}else{
    // 새 비밀번호와 비밀번호 확인이 같을 경우
    if($new_password==$new_password2){
        $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
        $sql = "update users set user_password='$new_password' where user_number='$user_number' ;";
        mysqli_query($con, $sql);
        mysqli_close($con);
        echo '
          <script>
            alert("비밀번호가 변경되었습니다. 로그인 해주세요.");
            location.replace("./login.php");
          </script>';
          session_destroy();
    }else{
        // 새비밀번호와 비밀번호 확인이 다른 경우
        echo '
        <script>
          alert("비밀번호가 다릅니다 다시 확인해 주세요");
          history.back();
        </script>';
    }
}
?>
<!--alert('회원님의 비밀번호는 ".$result['user_password']."입니다.');-->