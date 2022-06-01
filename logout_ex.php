<?php include "db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>메인페이지</title>
    <link rel="stylesheet" href="./css/pass_data.css">
</head>
<body>
<body>
<div class="top_pass4">
      <ul class="my-box">
      <?php
	if(isset($_SESSION['user_number'])){
		echo "<li>{$_SESSION['user_number']} 님</li>";}
	?>
      <button><a href="#" onclick="location.href='login_out.php'"> 로그아웃 </a></button>
  
    </ul>
</div>
</body>
<body>
	<?php
	if(isset($_SESSION['user_number'])){
		echo "<li>{$_SESSION['user_number']} 님</li>";}
?>
  <?php

    if(isset($_SESSION['user_number'])){
      $user_number = $_SESSION['user_number'];
    }
    $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
    $sql = "select * from users where user_number='$user_number'; ";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $user_grade = $row["user_grade"];
    $user_major= $row["user_major"];
  ?>	
<li> <?=$user_number?></li>
<li> <?=$user_grade?></li>
<li> <?=$user_major?></li>
</body>

</html>