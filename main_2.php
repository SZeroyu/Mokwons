<!--main.php -> 메인화면 및 대학일반-->
<!--main_2.php -> 테이블 없는 메인화면 및 대학일반-->
<!--main2.php -> 학사일정-->
<!--main2_2.php -> 테이블 없는 학사일정-->
<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main1.css">
    <link rel="stylesheet" href="./css/pass_data.css">

</head>

<body>

<?php
  if(isset($_SESSION["user_number"])){
    $user_number = $_SESSION["user_number"];
    if(!$user_number){
      echo '
        <script>
          alert("잘못된 접근입니다..");
          location.replace("./login.php");
        </script>';
    }
  }
   ?>
<div><?php include "icon.php";?></div> 
    <div id="main_page">
    <div class= "top_header"></div>
    <div class= "back_header" ></div>
            <div class="logo">
                <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
            <div id="top_menu" style="font-size: 25px; display: inline;">

                <ul>
                    <li><a href="#" onclick="location.href='main.php'"> 대학일반 </a></li>
                    <li><a href="#" onclick="location.href='main2.php'"> 학사행정</a></li>
                </ul>
            </div>

            <div id="sub_menu">
                <ul class="main">
                    <li><a href="#" style="font-size: 20px; font-weight: bold;">대학일반</a></li>
                    <li><a href="#">개인정보</a>
                    <ul class="sub">
                        <li><a href="#" onclick="location.href='check_pwd.php'">개인정보변경</a></li>
                        <li><a href="#" onclick="location.href='change_graduate_data.php'">개인정보변경(졸업생)</a></li>
                        <li><a href="#" onclick="location.href='password_new.php'"> 비밀번호변경</a></li>
                        <li><a href="#">비밀번호이력</a></li>
                        <li><a href="#">접속이력조회</a></li>
                    </ul></li>
                </ul></div>
    </div>
</body>
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
<li><?="접속 ip : " . $ip?></li>

</ul>
<button><a href="#" onclick="location.href='login_out.php'"> 로그아웃 </a></button>
</div>
</body>
</html>
