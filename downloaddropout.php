<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main1.css" />
    <link rel="stylesheet" href="./css/dormitory.css" />
    <link rel="stylesheet" href="./css/download.css" />
    <link rel="stylesheet" href="./css/mail.css" />
    <div><?php include "main2_2.php";?></div>
    </HEAD>
    <BODY>
    <br><br><br><br><br><br><br><br>


<div>
  <hr>
  <p>
    <br><br><br><br>
    <h3>자퇴원 다운로드</h3>
    <a href="img/자퇴원.hwp" download><button type="button">다운로드</button></a>
    <br />
</div>



<input type="button" value="인쇄" class="print_btn" onclick="location.href='dropout.php'">
<input type="button" value="다운로드" class="download_btn" onclick="location.href='downloaddropout.php'">
<input type="button" value="메일" class="mail_btn" onclick="location.href='maildropout.php'">

</html>


<!-- <html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h3>파일 download</h3>
<a href="img/휴학계.hwp" download><button type="button">다운로드</button></a>
</body>
</html> -->
