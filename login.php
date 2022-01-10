<!--로그인 화면-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link href="./css/logins_1.css" rel="stylesheet">
</head>
<body>
  
    <div class="top_header"></div>
    <div class="top_img"> <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
    <div class="background_img"><img src="./img/배경.png" width="100%" height="100%"></div>
    

    <main class="main_mi">
      <form action="login_check.php" method="post">
    <div class="main_gnb">
        <div class="background_box">
        <div class="box1">
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;">로그인</h1>
        <h3 class="h3 mb-3 fw-normal" style="text-align: center;">목원대 종합정보시스템에 오신걸 환영합니다!</h3>
      
<!--로그인-->
  <br />
        <table align="center" border="0" cellspacing="0" width="300" style="font-weight: bold; ">
        <div class="box1">
              <tr>
                <td colspan="1">학번/사번<input  type="id" name="user_number" class="inph" placeholder="학번"></td>
              </tr>
            </div>
            <div class="box1">
              <tr>
                <td colspan="1">비밀번호<input type="password" name="user_password" class="inph" placeholder="비밀번호"></td>
              </tr>
            </div>
           <tr>
            <td  colspan="2" width="100%">
              <input type="submit" class="btn" value="  로그인  ">
             <input type="button" onclick="location.href='find_id_pwd.php'" class="btn1" value=" 학번/사번/비밀번호찾기 ">
            </td>
           </tr>
           
     </table>
     <footer class="pn">&copy; 시스템 문의 : 042-829-7236</footer>  
        </div> 
    </div>
   </main>
</body>
</html>