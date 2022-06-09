 <!--관리자 드롭 메뉴-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./css/icon.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
  <input id="menu_icon" type="checkbox"/>
  <label for="menu_icon">
      <span></span>
      <span></span>
      <span></span>
  </label>
  <div class="sidebar">
    <div class="accordion">
      <input type="checkbox" id="answer01">
      <label for="answer01">대학일반</label>
      <div> 
        <input type="checkbox" id="submn_01">
        <label for="submn_01">개인정보</label>
        <div>
          <ul>
            <li><a href="#" onclick="location.href='registration.php'">회원추가</a></li>
            <li><a href="#" onclick="location.href='search_data.php'">학생 검색 및 수정</a></li>
            <li><a href="#" onclick="location.href='personal_data_1.php'">개인정보변경(졸업생)</a></li>
            <li><a href="#" onclick="location.href='password_new.php'">비밀번호변경</a></li>
            <li><a href="#">비밀번호이력</a></li>
            <li><a href="#">접속이력조회</a></li>
          </ul>
         </div>
      </div>
      

      <input type="checkbox" id="answer02">
      <label for="answer02">학사행정</label>
      <div>
        <input type="checkbox" id="submn_02">
        <label for="submn_02">힉적관리</label>
        <div>
         <ul>
         <li><a href="#">졸업생정보조회</a></li>
        <li><a href="#">일반복학신청</a></li>
        <li><a href="#">일반휴학신청</a></li>
        <li><a href="#">자퇴신청</a></li>
        <li><a href="#">국가기술자격증등록</a></li>
         </ul>
        </div>

        <input type="checkbox" id="submn_03">
        <label for="submn_03">강의정보</label>
        <div>
         <ul>
         <li><a href="#">공결관리</a></li>
         <li><a href="#">강의평가입력</a></li>
         <li><a href="#">시간표조회</a></li>
         </ul>
        </div>

        <input type="checkbox" id="submn_04">
        <label for="submn_04">성적관리</label>
        <div>
         <ul>
         <li><a href="#">성적조회</a></li>
         <li><a href="#">금학기성적열람</a></li>
         <li><a href="#">계절학기성적열람</a></li>
         </ul>
        </div>

        <input type="checkbox" id="submn_05">
        <label for="submn_05">장학관리</label>
        <div>
         <ul>
         <li><a href="#">장학이력조회</a></li>
         <li><a href="#">근로장학생신청</a></li>
         <li><a href="#">온라인장학금신청</a></li>
         </ul>
        </div>

        <input type="checkbox" id="submn_06">
        <label for="submn_06">등록관리</label>
        <div>
         <ul>
         <li><a href="#">등록금처리요청</a></li>
         <li><a href="#">분할납부신청</a></li>
         </ul>
        </div>

        <input type="checkbox" id="submn_07">
        <label for="submn_07">상담 및 포토폴리오 관리</label>
        <div>
         <ul>
         <li><a href="#">학업계획등록</a></li>
         <li><a href="#">학습활동등록</a></li>
         <li><a href="#">교우관계등록</a></li>
         <li><a href="#">상담예약</a></li>
         </ul>
        </div>

        <input type="checkbox" id="submn_08">
        <label for="submn_08">생활관</label>
        <div>
         <ul>
         <li><a href="#">생활관입사신쳥</a></li>
         <li><a href="#">생활관사생카드작성</a></li>
         <li><a href="#">생활관외박신청</a></li>
         <li><a href="#">생활관퇴사신청</a></li>
         </ul>
        </div>

        <input type="checkbox" id="submn_09">
        <label for="submn_09">부가서비스</label>
        <div>
         <ul>
         <li><a href="#">봉사자료입력</a></li>
         <li><a href="#">학습단체활동신청</a></li>
         <li><a href="#">사물함신청</a></li>
         <li><a href="#">기초요양클리닉신청</a></li>
         </ul>
        </div>
      </div>
      <input type="checkbox" id="answer03">
      <label for="answer03">관리자</label>
      <div>
      <input type="checkbox" id="submn_10">
        <label for="submn_10">설정</label>
      <div>
         <ul>
         <li><a href="#">메뉴</a></li>
         <li><a href="#">메뉴</a></li>
         <li><a href="#">메뉴</a></li>
         <li><a href="#">메뉴</a></li>
         </ul>
        </div>
</div>
    </div>
  </div>
</body>
</html>