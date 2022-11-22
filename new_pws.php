<!-- 비밀번호변경 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>
