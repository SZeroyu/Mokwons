<?php
$con = mysqli_connect("localhost", "root", "", "project") or die("fail");


if(isset($_SESSION["class_code"])){
  $class_code = $_SESSION["class_code"];
  $sql = "DELETE FROM subject WHERE class_code= '$class_code';";
  
  $result = mysqli_query($conn, $sql);
if($result === false){
echo "<script>alert('문제생김');</script>";
error_log(mysqli_error($conn));
} else {
  echo "<script>alert('취소되었습니다');
  location.href='./app_class.php'
  </script>";
}
    
    
}
?>

           
