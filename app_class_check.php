<?php


$con = mysqli_connect("localhost", "root", "", "project") or die("fail");


if(isset($_SESSION["user_number"])){
  $user_number = $_SESSION["user_number"];
  $sql = "insert into subject_data(user_number, class_code, class_name, user_class, class_division)";
  $sql .= "values('$user_number', '$class_code', '$class_name', '$user_class', '$class_division')";
  
    mysqli_query($con, $sql);
    mysqli_close($con);
    $_SESSION['user_number'] = $user_number;
}
?>
<script>
alert("신청되었습니다");
location.href='app_class.php';
</script>
           
