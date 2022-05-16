<?php
include "./db.php";

if($_POST["user_number"] == ""|| $_POST["user_pnumber"] == "" || $_POST["user_name"] == ""){
    echo '<script> alert("정보를 입력하세요"); history.back(); </script>';
}else{

$user_number = $_POST['user_number'];
$user_name = $_POST['user_name'];
$user_pnumber = $_POST['user_pnumber'];



$sql = mq("select * from users where user_number = '{$user_number}' && $user_pnumber = '{$user_pnumber}' && user_name = '{$user_name}'");
$result = $sql->fetch_array();

if($result["user_number"] == $user_number){
echo "<script>
location.href='./reset_pwd.php'
</script>"
;

}else{
echo "<script>alert('없는 계정입니다. 다시 입력해주세요'); history.back();</script>";
}
}

?>
<!--alert('회원님의 비밀번호는 ".$result['user_password']."입니다.');-->