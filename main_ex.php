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
<div><?php include "header.php";?>
  <main>
    <div class="section">
    <table class="main_table" border="1" width="50%" height=200 bordercolor="gray" cellspacing="0">
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
  </main>

  
  
</header>
</body>
</html>

