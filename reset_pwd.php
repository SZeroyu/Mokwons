<!--비밀번호 찾기-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link href="./css/reset_pwd.css" rel="stylesheet">
    <script>
    let nodemailer = require('nodemailer');    //노드메일러 모듈을 사용할 거다!



router.post('/sendEmail', async function (req, res) {


    let user_email = req.body.email;     //받아온 email user_email에 초기화

    console.log(user_email);


    // 메일발송 함수

    let transporter = nodemailer.createTransport({
        service: 'naver'              //사용하고자 하는 서비스
        , prot: 587
        , host: 'smtp.naver.com'
        , secure: false
        , requireTLS: true
        , auth: {
            user: 'mokwonex@naver.com'           //gmail주소입력
            , pass: 'mokwon12!@'                 //gmail패스워드 입력
        }
    });

    let info = await transporter.sendMail({   
        from: 'mokwonex@naver.com',             //보내는 주소 입력
        to: user_email,                        //위에서 선언해준 받는사람 이메일
        subject: '안녕하세요',                  //메일 제목
        text: 'ㅁㄴㅇㄹ',                       //내용
      });


})
    </script>    


</head>

<body>
<form name='sendmail' action='sendmail.php' method='post'>
<div class="top_header"></div>
    <div class="top_img"> <img src="./img/로고2.jpg" alt="Logo" width="350"></div>
    <div class="background_img"><img src="./img/배경.png" width="100%" height="100%"></div>
    <div class="background_box">
    <div class="box1">   
    <table align="center" border="0" cellspacing="0" width="300" style="font-weight: bold; ">
          <tr><th><h2 >인증</h2></th></tr>
          <tr><td><input type="text" id="user_email" name="user_email" class="inph" placeholder="인증번호"/></td></tr>
          <tr ><td width="100%"><button type="submit" id="sendBtn" class="reset_pwd" value="전송" onclick='check()'>인증하기</button></td></tr>
    </table>
    <footer class="pn">&copy; 시스템 문의 : 042-829-7236</footer> 
</div>
</div> 
    </form>
</body>
</html>

