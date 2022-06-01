<?php
include "./db.php";

if($_POST["user_password"] == ""){
    echo "<script> alert('비밀번호를 입력해주세요'); 
    location.href='./check_pwd.php' </script>";
}else{

$user_password = $_POST['user_password'];

$sql = mq("select * from users where user_password = '{$user_password}'");
$result = $sql->fetch_array();

if($result["user_password"] == $user_password){
echo "<script>alert('본인확인이 되었습니다');
location.href='./change_personal_data.php'
</script>";

}else{
echo "<script>alert('다시입력해주세요'); 
location.href='./check_pwd.php'
</script>";
}
}


?>
