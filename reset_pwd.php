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
          <tr><td><input type="email" id="user_email" name="user_email" class="inph" placeholder="이메일"/></td></tr>
          <tr ><td width="100%"><button id="sendBtn" class="reset_pwd" value="전송" onclick={this.sendEmail}>전송</button></td></tr>
    </table>
    <footer class="pn">&copy; 시스템 문의 : 042-829-7236</footer> 
</div>
</div> 
</body>
<script>
    class Signup_page extends React.Component {

constructor(props) {
    super(props);
    this.state = {
        email: '',           // 입력받은 email state값

    }
    this.sendEmail = this.sendEmail.bind(this);

}


sendEmail(e){
    e.preventDefault();
    console.log(this.state.email);
    const data = {                      //현재의 email state값을 data객체로 감쌌다
        email: this.state.email
    }

    fetch('http://localhost:3001/sendEmail',{      //sendEmail 라우터로 보내버리기
        method: "post",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data),
    })
    .then(res => res.json())
    .then(json => {
        
    })
    
}}
</script>
<script>
let nodemailer = require('nodemailer');    //노드메일러 모듈을 사용할 거다!



router.post('/sendEmail', async function (req, res) {


    let user_email = req.body.email;     //받아온 email user_email에 초기화

    console.log(user_email);


    // 메일발송 함수

    let transporter = nodemailer.createTransport({
        service: 'gmail'              //사용하고자 하는 서비스
        , prot: 587
        , host: 'smtp.gmlail.com'
        , secure: false
        , requireTLS: true
        , auth: {
            user: 'mokwon1951@gmail.com'           //gmail주소입력
            , pass: 'mokwon12!@'                 //gmail패스워드 입력
        }
    });

    let info = await transporter.sendMail({   
        from: 'mokwon1951@gmail.com',             //보내는 주소 입력
        to: 'user_email',                        //위에서 선언해준 받는사람 이메일
        subject: '안녕하세요',                  //메일 제목
        text: 'ㅁㄴㅇㄹ',                       //내용
      });


})
</script>
</html>

