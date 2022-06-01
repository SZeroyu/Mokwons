<?php
     include "./db.php";

     if($_POST["user_email"] == "" ){
         echo '<script> alert("정보를 입력하세요"); history.back(); </script>';}
        else{
            echo '<script> alert("이메일 완료"); </script>';
        }
?>
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
            to: user_email,                        //위에서 선언해준 받는사람 이메일
            subject: '안녕하세요',                  //메일 제목
            text: 'ㅁㄴㅇㄹ',                       //내용
          });
    
    
    })
    
    
    
    </script>