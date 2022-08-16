<!--학번/사번 찾기-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link href="./css/find_id.css" rel="stylesheet">
</head>
<body>
    <div class="top_header"></div>
    <div class="top_img"> <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
    <div class="background_img"><img src="./img/배경.png" width="100%" height="100%"></div>
    <div class="background_box">
    <div class="box1">   
    <form action="find_user_number.php" method="post">
    
    <table align="center" border="0" cellspacing="0" width="300" style="font-weight: bold; ">
          <tr><th><h2 >학번/사번 찾기</h2></th></tr>
          <tr><td><input type="text" type="id" name="user_name" class="inph" placeholder="이름"/></td></tr>
          <tr><td><input type="text" maxlength ='8' type="password" name="user_birthday" class="inph" placeholder="생년월일 ex)20220319"/></td></tr>
          <tr><td width="100%"> <input type="submit"  class="num_btn" value=" 학번/사번 찾기 "/></td></tr>
          </table>
</div>
     <p href="#" onclick="location.href='login.php'" class="login"> 로그인 </p>  
     <p href="#" onclick="location.href='find_pwd.php'" class="find_pwd"> 비밀번호 재설정 </p>  
      
     <footer class="pn">&copy; 시스템 문의 : 042-829-7236</footer> 
</div> 
</body>
</html>