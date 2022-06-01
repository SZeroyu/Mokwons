<?php
include "./db.php";

if($_POST["user_name"] == "" || $_POST["user_name"] == ""){
    echo '<script> alert("정보를 입력하세요"); history.back(); </script>';
}else{

$user_name = $_POST['user_name'];
$user_birthday = $_POST['user_birthday'];


$sql = mq("select * from users where user_name = '{$user_name}' && $user_birthday = '{$user_birthday}'");
$result = $sql->fetch_array();

if($result["user_name"] == $user_name){
echo "<script>alert('회원님의 학번는 ".$result['user_number']."입니다.');
location.href='./login.php'
</script>";

}else{
echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
}

?>
