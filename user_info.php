<!--사용자 정보-->
<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/pass_data_ex.css">
</head>

<body>
    <div class="top_pass4">
    <img src="./img/user.png" alt="Logo" width="100">
    <?php
    if(isset($_SESSION['user_number'])){
      $user_number = $_SESSION['user_number'];
    }
    $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
    $sql = "select * from users where user_number='$user_number'; ";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $user_name = $row["user_name"];
    $user_status = $row["user_status"];
    $user_major= $row["user_major"];
  ?>
  <ul class="my-box">
    <li><?=$user_major?></li>
    <li><?=$user_name?> | <?=$user_status?></li>	
    <li><?="IP : " . $ip?></li>
  </ul>
  <button><a href="#" onclick="location.href='login_out.php'"> 로그아웃 </a></button>
</div>
</body>
</html>
