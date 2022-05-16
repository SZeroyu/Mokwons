<!--로그인 화면-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link href="./css/login.css" rel="stylesheet">
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
                <td colspan="1"><input  type="id"  onKeydown='javascript:handlerNum(this)' name="user_number" class="inph" placeholder="학번"></td>
              </tr>
            </div>
            <div class="box1">
              <tr>
                <td colspan="1"><input type="password" name="user_password" class="inph" placeholder="비밀번호"></td>
              </tr>
            </div>
           <tr>
            <td  colspan="2" width="100%">
              <input type="submit" class="btn" value="  로그인  ">
             
            </td>
</tr>
     </table>
     <p href="#" onclick="location.href='find_id.php'" class="find_id"> 학번/사번 찾기 </p>  
     <p href="#" onclick="location.href='find_pwd.php'" class="find_pwd"> 비밀번호 재설정 </p>  
     <footer class="pn">&copy; 시스템 문의 : 042-829-7236</footer>  
        </div> 
    </div>
   </main>
</body>
<script>
function handlerNum( obj ) {
 //숫자만 입력 받게끔 하는 함수.
  e = window.event; //윈도우의 event를 잡는것입니다.
 
  //입력 허용 키
  if( ( e.keyCode >=  48 && e.keyCode <=  57 ) ||   //숫자열 0 ~ 9 : 48 ~ 57
      ( e.keyCode >=  96 && e.keyCode <= 105 ) ||   //키패드 0 ~ 9 : 96 ~ 105 
        e.keyCode ==   8 ||    //BackSpace
        e.keyCode ==  46 ||    //Delete
        //e.keyCode == 110 ||    //소수점(.) : 문자키배열
        //e.keyCode == 190 ||    //소수점(.) : 키패드
        e.keyCode ==  37 ||    //좌 화살표
        e.keyCode ==  39 ||    //우 화살표
        e.keyCode ==  35 ||    //End 키
        e.keyCode ==  36 ||    //Home 키
        e.keyCode ==   9 ||      //Tab 키

        //admin
        e.keyCode ==   65 ||
        e.keyCode ==   68 ||
        e.keyCode ==   73 ||
        e.keyCode ==   77 ||
        e.keyCode ==   78 
    ) {}
 

 
    else //숫자가 아니면 넣을수 없다.
 {
  alert('숫자만 입력가능합니다');
  e.returnValue=false;
 }
}
</script>

</html>