<!--비밀번호 변경 화면-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link href="./css/login.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("EUbZ6bHpv6fy5YbYl");
   })();
</script>
</head>
<body>
  <!-- 헤더 -->
  <div class="top_header"></div>
  <div class="top_img"> <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
  <div class="background_img"><img src="./img/배경.png" width="100%" height="100%"></div>

  <!-- 비밀번호 변경 -->
    <div class="find_main">
      <!-- 비밀번호 변경 헤더 -->
      <div class="header">
        <h2>비밀번호 변경</h2>
      </div>
      <!-- 비밀번호 변경 body -->
      <div class="body">
        <!-- 이름 입력 -->
        <label for="user_name"></label>
        <input  type="text"  name="user_name" id="user_name" placeholder="이름">
        <!-- 이메일 입력 -->
        <label for="user_email"></label>
        <input type="text" name="user_email" id="user_email" placeholder="이메일">
        <!-- 이메일 버튼 -->
        <label for="find_btn"></label>
        <input type="button" class="find_btn" id="sendMail" value="이메일 보내기" name="sendMail"> 
      </div>
      <!-- 비밀번호 변경 footer -->
      <div class="footer">
        <div class="find">
          <p href="#" onclick="location.href='login.php'" class="login"> 로그인 </p>  
          <p href="#" onclick="location.href='find_id.php'" class="find_pid"> 학번/사번 변경 </p> 
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
  

  
      else //숫자가 아니면 넣을수 없음
  {
    alert('숫자만 입력가능합니다');
    e.returnValue=false;
  }
  }
</script>
<script type="text/javascript">
	$(document).ready(function() {
		emailjs.init("EUbZ6bHpv6fy5YbYl");		
    $('input[name=sendMail]').click(function(){ //메일 보내기 버튼 클릭시
      var templateParams = {	
        //입력된 사용자 이름과 이메일 받아오기
        user_name: $('input[name=user_name]').val(),
        user_email : $('input[name=user_email]').val()
      };
                    
      emailjs.send('service_61wnu7e', 'template_r4zs5b5', templateParams)
      .then(function(response) {      // 이메일 보내기 성공
        alert('이메일함을 확인해주세요!', response.status, response.text);
      }, function(error) { // 이메일 보내기 실패
        alert('다시 확인해주세요', error);
      });
    });
  });
</script>
 
</html>