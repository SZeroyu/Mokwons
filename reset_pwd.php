<!--비밀번호 찾기-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link href="./css/reset_pwd.css" rel="stylesheet">
</head>

<body>

<div class="top_header"></div>
    <div class="top_img"> <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
    <div class="background_img"><img src="./img/배경.png" width="100%" height="100%"></div>
    <div class="background_box">
    <div class="box1">   
    
    <table align="center" border="0" cellspacing="0" width="300" style="font-weight: bold; ">
          <tr><th><h2 >인증</h2></th></tr>
          <tr><td><input type="email" id="EA" name="EA" class="inph" placeholder="이메일"/></td></tr>
          <tr><td><input type="text" id="CEA" name="CEA" class="inph" placeholder="인증번호 입력" data-parsley-error-message="정확히 입력해 주세요" data-parsley-errors-container="#err-msg2" required /></td></tr>
          <div class="d-flex justify-content-between align-items-center mt-2">
            <div id="err-msg2" class="text-realred"></div>
            <tr ><td width="100%"><input type="button" id="sendBtn" class="reset_pwd" value="보내기" onclick="emailSend('EA')"></td></tr>
            <tr><td width="100%"><input type="button" id="cerBtn" class="btn btn-primary btn-block btn-lg mt-0 ml-auto custombtn d-none" value="인증하기" onclick="emailCer('CEA')"></td></tr>
            <tr><td><input type="hidden" id="hideCK" name="hideCK" value=""></td></tr>
          </div>
          <!--<tr ><td width="100%"> <input type="submit"  class="reset_pwd" value="인증 "/></td></tr>-->
    </table>
    
    <footer class="pn">&copy; 시스템 문의 : 042-829-7236</footer> 
</div>
    
</div> 
</body>
</html>
<script>
  	// 이메일 전송 기능
	function emailSend(email) {
		var EA = document.getElementsByName(email)[0].value;
		var validateEA = $('#'+email).parsley();
		
		if(validateEA.isValid() == true) {
			emailSendAjax(EA);
		}
		else {
			return alert("{{__('register_email_valid_msg')}}");
		}
	}
	
	// 이메일 인증 기능
	function emailCer(cerNum) {
		var CEA = document.getElementsByName(cerNum)[0].value;
		var validateCEA = $('#'+cerNum).parsley();
		
		if(validateCEA.isValid() == true) {
			emailCerAjax(CEA);
		}
		else {
			alert("{{__('register_auth_enter')}}");
		}
	}

  // 이메일 전송 기능
function emailSendAjax(email) {
  $.ajax({
  type: 'POST',
  url: '/email/send',
  dataType: 'json',
  data: {
    EA: email
  }
}).done(function(data) {
  if (data.result == 'exist') {
    alert(i18nconvert('register_already_msg'));
  }
  else if (data.result == 'send') {
    alert(i18nconvert('register_auth_com_msg'));
    document.getElementsByName('EA')[0].readOnly = true;
    document.getElementById('CEA').classList.remove('d-none');
    document.getElementById('cerBtn').classList.remove('d-none');
    document.getElementById('sendBtn').classList.add('d-none');
    
    clearTimeout(timer);
    stopWatch(300);
  }
  else {
    alert(i18nconvert('register_email_send_fail'));
  }
});
}

// 이메일 인증 기능
function emailCerAjax(cerNum) {
  $.ajax({
  type: 'POST',
  url: '/email/cert',
  dataType: 'json',
  data: {
    CEA: cerNum
  }
}).done(function(data) {
  if (data.result == 'success') {
    alert(i18nconvert('register_auth_success'));
    clearTimeout(timer);
    document.getElementsByName('CEA')[0].readOnly = true;
    document.getElementById('err-msg2').innerHTML = i18nconvert('register_auth_success');
    document.getElementsByName('hideCK')[0].value = 'true';
  }
  else {
    alert(i18nconvert('register_auth_fail'));
    document.getElementsByName('CEA')[0].value = null;
    document.getElementsByName('hideCK')[0].value = null;
  }
});
}

function stopWatch(TimeSet) {
	timer = setInterval(function(){
		sec = (TimeSet)%60;
		document.getElementById('err-msg2').innerHTML =i18nconvert('register_auth_time') + '&nbsp;' + parseInt(TimeSet/60) + i18nconvert('register_auth_minute') + sec + i18nconvert('register_auth_second') + "." + "<br><a href='javascript:;' id='resend' class='text-white' onclick=emailSend('EA')><u>"+i18nconvert('register_auth_resend')+"</u></a>";
		TimeSet--;
		
		if(TimeSet < 0){
			clearTimeout(timer);
			alert(i18nconvert('register_auth_timeout'));
			document.getElementsByName('EA')[0].value = null;
			document.getElementsByName('CEA')[0].value = null;
			document.getElementsByName('EA')[0].readOnly = false;
			document.getElementsByName('CEA')[0].readOnly = false;
			document.getElementsByName('hideCK')[0].value = null;
			document.getElementsByName('hideCNU')[0].value = null;
			document.getElementById('CEA').classList.add('d-none');
			document.getElementById('cerBtn').classList.add('d-none');
			document.getElementById('sendBtn').classList.remove('d-none');
			document.getElementById('err-msg2').innerHTML = i18nconvert('register_reauth_msg');
		}
    }, 1000);
}
  </script>
