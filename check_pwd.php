<!--비밀번호 찾기-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/new_pwd.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<div><?php include "main_2.php";?></div>
    <form action="checked_pwd.php" method="post">
        <!--개인정보 수집 동의-->
        <div class="yes_box">
            <label class="checkbox">
                <input type="checkbox" value="y" name="agree" id="agree" />
                <span class="icon"></span>
                <span class="text">개인정보 수집에 동의</span>
            </label>
  

            <div class="info_box">
                <ul>
                    <li style="padding-top:18px; padding-left:10px;"> 1. 수집된 개인정보는 학사 운영 업무 이외의 다른 목적에는 절대 사용되지 않습니다.</li>
                    <li style="padding-top:8px; padding-left:10px;"> 2. 수집하는 개인정보 </li> <li style="padding-left:30px;"> - 거주 정보, 전화번호, 이메일주소 등</li>
                    <li style="padding-top:8px; padding-left:10px;"> 3. 개인정보 수집 이용 </li> <li style="padding-left:30px;"> - 학사운영 및 교내 공지사항 전달, 우편물 발송, 장학금자급 등의 업무에 이용합니다.</li>
                </ul>
            </div>
        

        <!--비밀번호 확인-->
        <div class="pwd_check_box">
            <table class="pwd_check_table" align=center cellspacing="5">
                <tr>
                    <th colspan="2" bgcolor="#DFE6F7">비밀번호 입력</th>
                    <td colspan="2"><input type="password" name="user_password" value=""  class="inph_pwd" placeholder="비밀번호"></td>
                </tr>
            </table>
            <input type="submit" name="check_btn" id ="check_btn" class="check_btn" value="확인">
        </div> 
        </div>
</form>
</body>
            <script>
                $(function(){
                    agree_CheckedChanged();
                });

                //체크박스 체크 선택 또는 해체할 때 상태 업데이트
                $("#agree").change(function(){
                    agree_CheckedChanged();
                });

                function agree_CheckedChanged(){
                    
                    //페이지 로드할 때 체크박스 상태 확인
                    if($("#agree").prop("checked")){
                        console.log("체크");
                        $("#check_btn").prop("disabled", false); // 활성화
                    }
                    else{
                        console.log("no 체크");
                        $("#check_btn").prop("disabled", true); // 비활성화
                    }
                }
               

            </script>
</html>