<?php
include "./db.php";

if($_POST["user_number"] == ""|| $_POST["user_email"] == ""){
    echo '<script> alert("정보를 입력하세요"); history.back(); </script>';
}else{

$user_number = $_POST['user_number'];
$user_email = $_POST['user_email'];




$sql = mq("select * from users where user_number = '{$user_number}' && user_email = '{$user_email}'");
$result = $sql->fetch_array();

if($result["user_number"] == $user_number){
echo "<script>
alert('이메일을 전송하였습니다 확인해주세요'); 
location.href='./reset_pwd.php'
</script>"
;

}else{
echo "<script>alert('없는 계정입니다. 다시 입력해주세요'); history.back();</script>";
}
}

?>
<!--alert('회원님의 비밀번호는 ".$result['user_password']."입니다.');-->