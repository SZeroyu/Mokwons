<!--main.php -> 메인화면 및 대학일반-->
<!--main_2.php -> 테이블 없는 메인화면 및 대학일반-->
<!--main2.php -> 학사일정-->
<!--main2_2.php -> 테이블 없는 학사일정-->
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main_ex.css">
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

<header>
  <div class="top_header">
    <div class="box"></div>
    <img src="./img/로고2.jpg" alt="Logo" class="logo" width="340">
    <?php include "user_info.php";?>
  </div>
  <menu>
    <div class="main">
      <nav>
        <ul>
          <li><b>대학일반</b></li>
          <li><b>학사일정</b></li>
          <li><b>수업</b></li>
        </ul>
      </nav>
    </div>
    <div class="sub">
    <ul>
      <li><a style="font-size: 15pt;">대학일반</a></li>
      <li>개인정보
        <ul class="submenu">
          <li><a href="#" onclick="location.href='top10.php'">인기</a></li>
          <li><a href="#" onclick="location.href='season.php'">계절</a></li>
          <li><a href="#" onclick="location.href='festival.php'">축제</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </menu>

  
  
</header>
</body>
</html>

