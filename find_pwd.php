<!--비밀번호 찾기 화면-->
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
  <!-- 헤더 -->
  <div class="top_header"></div>
  <div class="top_img"> <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
  <div class="background_img"><img src="./img/배경.png" width="100%" height="100%"></div>

  <!-- 비밀번호 찾기 -->
  <form action="find_user_pw.php" method="post">
    <div class="find_main">
      <!-- 비밀번호 찾기 헤더 -->
      <div class="header">
        <h2>비밀번호 찾기</h2>
      </div>
      <!-- 비밀번호 찾기 body -->
      <div class="body">
        <label for="user_number"></label>
        <input  type="text"  name="user_number" placeholder="이름">
        <label for="user_email"></label>
        <input type="text" name="user_email" placeholder="이메일">
        <label for="find_btn"></label>
        <input type="submit" class="find_btn" id="find_btn" value="비밀번호 찾기"> 
      </div>
      <!-- 비밀번호 찾기 footer -->
      <div class="footer">
        <div class="find">
          <p href="#" onclick="location.href='login.php'" class="login"> 로그인 </p>  
          <p href="#" onclick="location.href='find_id.php'" class="find_pid"> 학번/사번 찾기 </p> 
        </div>
          <p class="pn">&copy; 시스템 문의 : 042-829-7236</p>
      </div>
    </div>
  </form>
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