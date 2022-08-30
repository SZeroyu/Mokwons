<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/print.css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
</head>
<body>
<div><?php include "header_2.php";?></div> 
    <div class="main_page01">
    <!-- 페이지 순 -->
      <div class="page_info"><p>학사행정<span> &gt </span>학적관리<span> &gt </span><span class="page">자퇴원출력<span></p></div>
      <!-- 사이드 메뉴 -->
      <div class="side_menu">
        <div class="navigation">
          <ul>
            <li class="list ">
              <a href="#" onclick="location.href='h_학사행정.php'">
                <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                <span class="title">학사행정</span>
              </a>
            </li>
            <li class="page_list"><p>학적관리</p></li>
            <li class="list active">
              <a href="" onclick="location.href='h_졸업논문계획서.php'">
                <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                <span class="title">졸업논문계획서</span>
              </a>
            </li>
            <li class="list ">
              <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="push-outline"></ion-icon></span>
                <span class="title">복학신청</span>
              </a>
            </li>
            <li class="list " >
              <a href="#" onclick="location.href='h_휴학신청.php'">
                <span class="icon"><ion-icon name="airplane-outline"></ion-icon></span>
                <span class="title">휴학신청</span>
              </a>
            </li>
            <li class="list " >
              <a href="#" onclick="location.href='h_자퇴신청.php'">
                <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                <span class="title">자퇴신청</span>
              </a>
            </li>
            <li class="list" >
              <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="card-outline"></ion-icon></span>
                <span class="title">국가자격증등록</span>
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
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="./js/script.js"></script>
      </div>
      <div class="graduate_plan">
        <div class="notice">
            <ol type="1">
                <li>
                    작성대상
                    <ol type="A">
                        <li>1전공자 : 1전공 졸업논문 계획서 작성 및 학과(부) 제출</li>
                        <li>복수전공자 : 1전공 및 복수전공 졸업논문계획서를 각각 작성항 해당학과(부) 제출</li>
                        <li>융복합전공자 : 1전공 및 융복합전공 졸업 논문 계획서를 각각 작성하여 해당학과(부) 제출</li>
                    </ol>
                </li>
                <li>
                    작성방법
                    <ol type="A">
                        <li>입력:졸업논문 구분 해당항목 선택 후 작성란에 내용을 간략히 기재하여 주시기 바랍니다.</li>
                        <li>변경:작성기간내에 내용 변경은 가능합니다.</li>
                    </ol>
                </li>
                <li>제출방법 : 졸업논문 작성계횏 출력 후 제출자, 지도교수 날인 후 해당학과(부)로 제출</li>
                <li>문의사항 : 학사관리계:042)829-7103</li>
            </ol>
        </div>
      </div>
    </div>
</body>
</html>