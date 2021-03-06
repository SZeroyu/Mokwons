<!--main.php -> 메인화면 및 대학일반-->
<!--main_2.php -> 테이블 없는 메인화면 및 대학일반-->
<!--main2.php -> 학사일정-->
<!--main2_2.php -> 테이블 없는 학사일정-->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main1.css">
    <link rel="stylesheet" href="./css/icon.css">
    <link rel="stylesheet" href="./css/pass1.css">

</head>

<body>
<div>
<?php 
include "icon.php";  
?>
  <?php
  session_start();
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
</div> 
    <div id="main_page">
    <div class= "top_header"></div>
    <div class= "back_header"></div>
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
                        <li><a href="#" onclick="location.href='change_personal_data.php'">개인정보변경</a></li>
                        <li><a href="#" onclick="location.href='personal_data_1.php'">개인정보변경(졸업생)</a></li>
                        <li><a href="#" onclick="location.href='password_new.php'">비밀번호변경</a></li>
                        <li><a href="#">비밀번호이력</a></li>
                        <li><a href="#">접속이력조회</a></li>
                    </ul></li>
                </ul></div>
    </div>
    <!--부서전화번호 테이블-->
    <body>
    <div>
    <table border="1" width="50%" height=200 bordercolor="gray" cellspacing="0">
            <tr align="center" bgcolor="#DFE6F7" style="font-weight: bold;">
                <td>구분</td>
                <td>프로그램</td>
                <td>담당부서</td>
                <td>부서전화번호</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td rowspan="5">개인정보</td>
                <td>개인정보변경</td>
                <td rowspan="2">학사자원과</td>
                <td rowspan="2">829-7978, 7979</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>개인정보변경(졸업생)</td>
            </tr>
            <tr align="center" bgcolor="white">
                <td>비밀번호변경</td>
                <td rowspan="3">전산정보과</td>
                <td rowspan="2">829-7233</td>
            </tr>   
            <tr align="center" bgcolor="white">
                <td>비밀번호이력</td>
            </tr> 
            <tr align="center" bgcolor="white">
                <td>접속이력조회</td>
                <td>829-7236</td>
            </tr>
        </table>
    </div>
    
</body>
<?php
    session_start();
    $ip = file_get_contents('https://api.ipify.org');
    $user_number = $_SESSION["user_number"];
    $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
    $sql = "select u.user_major, u.user_grade, u.user_status, p.user_name
    from personal_data AS p LEFT JOIN users AS u on p.user_number = '$user_number' and  u.user_number = '$user_number' ; ";
      $res = mysqli_query($con, $sql) or die(mysqli_error($con));
      $row = mysqli_fetch_assoc($res)?>

      <div class="top_pass4">
      <ul class="my-box">
      <ins><li><?php echo $row["user_major"] ; ?></li></ins>
      <li><?php echo "[".$row["user_status"]."] > ".$row["user_name"]."(".$row["user_grade"].")"?></li>
      <li><?php echo "접속 ip : " . $ip;?></li>
      <button><a href="#" onclick="location.href='login_out.php'"> 로그아웃 </a></button>
    </ul>
</div>
</body>
</html>
