<!--사용자 정보-->
<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/header.css">
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
<!-- 헤더  -->
          <!-- 화면 크기가 768px 될경우 햄버거 메뉴 -->
           
   <header>
      <div class="top_header">
        <div class="box"></div>
        <!--학교로고-->
        <img src="./img/로고2.jpg" alt="Logo" class="logo" width="320">

        <!-- 프로필 시간이 되면 ip주소가 너무 길면 글씨크기 작아지는 js하기 -->
        <div class="top_pass4">
          <img src="./img/user.png" alt="Logo" width="80">
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
      </div>

      <!-- 메인메뉴 -->
      <nav>
        <div class="main">
          <nav>
          <ul>
            <li><b onclick="location.href='admin_대학일반.php'">대학일반</b></li>
            <li><b onclick="location.href='admin_학사행정.php'">학사행정</b></li>
            <li><b onclick="location.href='admin_수업.php'">수업</b></li>
        </ul>
          </nav>
        </div>
        <!-- 서브메뉴 -->
        <div class="sub">
                <ul class="sub_menu">
                    <li class="title"><a href="#">수업</a></li>
                    <li>
                        <a href="#">강의정보</a>
                        <ul class="submenu">
                            <li><a href="#">공결관리</a></li>
                            <li><a href="#">강의평가입력</a></li>
                            <li><a href="#" onclick="location.href=''"></a></li>
                            <li><a href="#" onclick="location.href=''">개설과목조회</a></li>    
                        </ul>
                    </li>   
                    <li>
                        <a href="#">성적관리</a>
                        <ul class="submenu">
                            <li><a href="#" onclick="location.href=''">전체성적조회</a></li>
                            <li><a href="#" onclick="location.href=''">금학기성적열람</a></li>
                            <li><a href="#" onclick="location.href=''">계절학기성적열람</a></li>
                            <li><a href="#" onclick="location.href=''">학점포기신청</a></li>
                        </ul>
                    </li>        
                </ul>
            </div>
            <div><?php include "icon.php";?></div>
          </nav>

   </header>
</body>
</html>

