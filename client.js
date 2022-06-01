
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


