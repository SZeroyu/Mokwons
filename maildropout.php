<!doctype html>
<!--main.php -> 메인화면 및 대학일반-->
<!--main_2.php -> 테이블 없는 메인화면 및 대학일반-->
<!--main2.php -> 학사일정-->
<!--main2_2.php -> 테이블 없는 학사일정-->

<!DOCTYPE html>
<!--휴학신청-->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main1.css" />
    <link rel="stylesheet" href="./css/dormitory.css" />
    <link rel="stylesheet" href="./css/download.css" />
    <link rel="stylesheet" href="./css/mail.css" />
    <div><?php include "header_2.php";?></div>
    </HEAD>
    <BODY>
    <br><br><br><br><br><br><br><br>


<div>
  <hr>
  <p>
    <br><br><br><br>
    <a href="mailto:rgy0409@gmail.com"
    title="문의메일보내기">문의메일보내기</a></p>
    <br />
</div>



<input type="button" value="인쇄" class="print_btn" onclick="location.href='dropout.php'">
<input type="button" value="다운로드" class="download_btn" onclick="location.href='downloaddropout.php'">
<input type="button" value="메일" class="mail_btn" onclick="location.href='maildropout.php'">

</html>



<!-- <html>
<head>
  <meta charset="utf-8" />
  <title>이메일 보내기</title>
</head>

<body>
  <hr>
  <p>
    1951048@mokwon.ac.kr<a href="mailto:rgy0409@gmail.com"
    title="문의메일보내기">문의메일보내기</a></p>
    <br />
</body>
</html> -->
