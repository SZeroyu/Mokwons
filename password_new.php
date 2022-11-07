<!-- 비밀번호변경 -->
<!DOCTYPE html>
<html lang='en' dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>비밀번호변경</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/user_info.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
</head>

<body>
  <div><?php include "header_1.php";?></div>
  <div class="main_page01">
        <div class="page_info"><p>대학일반<span> &gt </span>개인정보<span> &gt </span><span class="page">비밀번호변경</span></p></div>
        <!-- 사이드 메뉴 -->
        <div class="side_menu">
            <div class="navigation">
                <ul>
                    <li class="list ">
                        <a href="#" onclick="location.href='h_대학일반.php'">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">대학일반</span>
                        </a>
                    </li>
                    <li class="page_list"><p>개인정보</p></li>
                    <li class="list ">
                        <a href="#" onclick="location.href='p_개인정보수집동의.php'">
                                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                                <span class="title">개인정보변경</span>
                        </a>
                    </li>
                    <li class="list ">
                        <a href="#" onclick="location.href='change_graduate_data.php'">
                                <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                                <span class="title">졸업생정보조회</span>
                        </a>
                    </li>
                    <li class="list active">
                        <a href="#" onclick="location.href='password_new.php'">
                                <span class="icon"><ion-icon name="key-outline"></ion-icon></span>
                                <span class="title">비밀번호변경</span>
                        </a>
                    </li>
                    <li class="list ">
                        <a href="#">
                                <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                                <span class="title">비밀번호이력</span>
                        </a>
                    </li>
                    <li class="list ">
                        <a href="#">
                                <span class="icon"><ion-icon name="link-outline"></ion-icon></span>
                                <span class="title">접속이력</span>
                        </a>
                    </li>
                    <li class="list">
                        <a href="#" onclick="location.href='login_out.php'">
                                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                                <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>        
            </div>

            <script src="./js/script.js"></script>
        </div>
        <!-- 비밀번호변경페이지 -->
        <div class="new_password">
            <form action="password_new_check.php" method="post">
                <table id="table_1" align=center cellspacing="10";>
                    <tr><th><span><ion-icon name="lock-closed-outline"></ion-icon></span><h3>비밀번호 변경</h3></th></tr>
                    <tr>
                        <td>
                            <p class="pwd_title">현재 비밀번호</p>
                            <label for="current_pwd" ></label>
                            <input type="password" name="current_password" id="current_pwd" placeholder="현재 비밀번호" onkeyup="check_pw()" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="pwd_title">새 비밀번호</p>
                            <label for="new_pwd" ></label>
                            <input type="password"  name="new_password" id="new_pwd" placeholder="새 비밀번호"  onkeyup="check_pw()">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p class="pwd_title">비밀번호 확인</p>
                            <label for="new_pwd_check"></label>
                            <input type="password" id="new_pwd_check" name="new_password2" placeholder="비밀번호 확인"  onkeyup="check_pw()">
                            <p class="pwd_title"><span id="check" class="check"></span></p>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td><p class="pwd_title"><span id="check" class="check"></span></p></td>
                    </tr> -->
                    <tr><th colspan="4" ><input type="submit" id="btn"  value="저장"></th></tr>
                </table>
            </form>
        </div>
</div>
<script>
    function check_pw(){
        if(document.getElementById('current_pwd').value == document.getElementById('new_pwd').value){
                    document.getElementById('check').innerHTML='* 기존비밀번호와 동일합니다 변경해주세요'
                    document.getElementById('check').style.color='red';
                    
        }else{
      
            if(document.getElementById('new_pwd').value !='' && document.getElementById('new_pwd_check').value !=''){
                if(document.getElementById('new_pwd').value==document.getElementById('new_pwd_check').value){
                    document.getElementById('check').innerHTML='* 비밀번호 일치'
                    document.getElementById('check').style.color='blue';
                }
                else{
                    document.getElementById('check').innerHTML='* 비밀번호 일치하지 않음';
                    document.getElementById('check').style.color='red';
                }
            }
        }

    }


    
    </script>
</body>
</html>