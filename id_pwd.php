<!--로그인 화면-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link href="./css/id_pwd.css" rel="stylesheet">
</head>
<body>
    <div class="top_header"></div>
    <div class="top_img"> <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
    <div class="background_img"><img src="./img/배경.png" width="100%" height="100%"></div>
    

    <main class="main_mi">
      <form action="login_check.php" method="post">
        <div class="background_box">
<!--찾기-->
  <br />
       
        <div class="box1">
          <from method="post" action="find_user_number.php">
          <table  border="0" width="300" style="font-weight: bold; ">
          <tr><th><h2>학번/사번 찾기</h2></th></tr>
          <tr><td><input type="text" name="user_name" class="inph" placeholder="이름"></td></tr>
          <tr><td><input type="text" name="user_birthday" class="inph" placeholder="생년월일"></td></tr>
          <tr><td width="100%"> <input type="submit"  class="btn" value=" 학번/사번 찾기 "></td></tr>
          </table>
         
</from>
</div>
<div class="box2">
          <from method="post" action="find_user_password.php">
          <table  border="0" width="300" style="font-weight: bold; ">
          <tr><th><h2>비밀번호찾기</h2></th></tr>
          <tr><td><input type="id" name="user_number" class="inph" placeholder="학번"></td></tr>
          <tr><td><input type="text" name="user_birthday" class="inph" placeholder="생년월일"></td></tr>
          <tr><td><input type="text" name="user_pnumber" class="inph" placeholder="전화번호"></td></tr>
          <tr><td width="100%"><input type="submit"  class="btn1" value=" 비밀번호 찾기 "></td></tr>
          </table>
        </from>
</div>
     
             
    
     <footer class="pn">&copy; 시스템 문의 : 042-829-7236</footer>  
   </main>
</body>
</html>