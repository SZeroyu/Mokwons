<!--휴학신청-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/print.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
    <script language="JavaScript">
      var initBody
      function beforePrint()
      {
      initBody = document.body.innerHTML;
      document.body.innerHTML = idPrint.innerHTML;
      }

      function afterPrint()
      {
      document.body.innerHTML = initBody;
      }

      function printArea()
      {
      window.print();
      }

      window.onbeforeprint = beforePrint;
      window.onafterprint = afterPrint;
</script>
</HEAD>
<body> 
  <div><?php include "header_2.php";?></div>  
  <div class="main_page01">
  <!-- 페이지 순 -->
  <div class="page_info"><p>학사행정<span> &gt </span>학적관리<span> &gt </span><span class="page">휴학신청<span></p></div>
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
        <li class="list ">
          <a href="#" onclick="location.href=''">
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
        <li class="list active" >
          <a href="#" onclick="location.href='h_휴학신청.php'">
            <span class="icon"><ion-icon name="airplane-outline"></ion-icon></span>
            <span class="title">휴학신청</span>
          </a>
        </li>
        <li class="list" >
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
    </div>
<!-- 휴학신청 프린트 영역 -->
  <div class="print_table">
    <div id="idPrint">
      <table class="tg">
        <thead>
          <tr>
            <th class="tg-xhiq" colspan="15"><span style="text-decoration:underline">휴&nbsp;&nbsp;학&nbsp;&nbsp;원</span></th>
          </tr>
        </thead>
          <tbody>
            <tr>
              <td class="tg-baqh" rowspan="14"></td>
              <td class="tg-baqh">학 번 / 학 년</td>
              <td class="tg-baqh">              </td>
              <td class="tg-baqh">           </td>
              <td class="tg-baqh">성&nbsp;&nbsp;명</td>
              <td class="tg-baqh" colspan="3">         </td>
              <td class="tg-0lax" colspan="7" rowspan="14"></td>
            </tr>
            <tr>
              <td class="tg-baqh">소 속</td>
              <td class="tg-baqh" colspan="2">공과대학 융합컴퓨터 미디어학부</td>
              <td class="tg-baqh">전 공</td>
              <td class="tg-baqh" colspan="3">융합미디어전공</td>
            </tr>
            <tr>
              <td class="tg-baqh">전 화 번 호</td>
              <td class="tg-baqh" colspan="2">            </td>
              <td class="tg-baqh">이 수 학 기</td>
              <td class="tg-baqh" colspan="3">  학기</td>
            </tr>
            <tr>
              <td class="tg-baqh">휴 학 기 간</td>
              <td class="tg-baqh" colspan="2">&nbsp;&nbsp;&nbsp;년&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;학기</td>
              <td class="tg-baqh">휴 학 구 분</td>
              <td class="tg-baqh" colspan="3">일 반 휴 학</td>
            </tr>
            <tr>
              <td class="tg-baqh">복 학 예 정 학 기</td>
              <td class="tg-baqh" colspan="2">              </td>
              <td class="tg-baqh">생 년 월 일</td>
              <td class="tg-baqh" colspan="3">         -          </td>
            </tr>
            <tr>
              <td class="tg-baqh">병 역 사 항</td>
              <td class="tg-baqh" colspan="2">민방위 * 예비군 * 입영대상 * 현역 * 여학생 * 기타</td>
              <td class="tg-baqh">국 적</td>
              <td class="tg-baqh" colspan="3">        </td>
            </tr>
            <tr>
              <td class="tg-0lax" rowspan="2">휴 학 사 유</td>
              <td class="tg-baqh" colspan="6" rowspan="2">□ 편입학 휴학         □ 학비마련 휴학         □ 취업 휴학         □ 유학 휴학<br>□ 가사 휴학            □졸업시기 조정          □ 사회 경험        □ 창업 휴학</td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td class="tg-baqh" colspan="7">본인은 위와 같이 휴학 하고자 하오니 허락하여 주시기 바랍니다.<br><br>년&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;월&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일<br><br>본 인 성명:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(인)<br>보호자성명:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(인)</td>
            </tr>
            <tr>
              <td class="tg-baqh" rowspan="2"><br><br>경유</td>
              <td class="tg-baqh">지도교수</td>
              <td class="tg-baqh">학과(부)장</td>
              <td class="tg-baqh">도서관<br>(도서관대출)</td>
              <td class="tg-baqh">국제교육원<br>(외국인전용)</td>
              <td class="tg-baqh" colspan="2">장학지원과</td>
            </tr>
            <tr>
              <td class="tg-lqy6"> (인)</td>
              <td class="tg-lqy6">(인)</td>
              <td class="tg-lqy6">(인)</td>
              <td class="tg-lqy6">(인)</td>
              <td class="tg-lqy6" colspan="2">(인)</td>
            </tr>
            <tr>
              <td class="tg-h8l1" colspan="7">목 원 대 학 교   총 장  귀 하</td>
            </tr>
            <tr>
              <td class="tg-baqh"><br><br>유<br>의<br>사<br>항</td>
              <td class="tg-0lax" colspan="5">1. 휴학기간은 1회 1년(2학기)을 초과할 수 없으며, 재학기간 중 통산하여 3년을 초과할 수 없음<br>    단, 입영. 휴학기간 제외(2002학년도 1학기부터 적용)<br>2. 장학생으로 선발된 학생이 등록금을 납부하지 않고 휴학하는 경우 추후 복학시 장학금을<br>    받을 수 없으니 참고 바랍니다. (장학규정 제 9조 3항에 의거)<br>3. 휴학기간 만료 후 미복학자는 학칙 제 30조에 의거하여 자동 제적처리 됨<br><span style="font-style:italic;text-decoration:underline;color:#3531FF">4. 병무청 공지사항 : 휴학을 해도 본인이 입영신청을 하지 않으면 게속해서 입영 연기자로</span><br><span style="font-style:italic;text-decoration:underline;color:#3531FF">    관리됩니다. 군 입대를 목적으로 휴학하는 학생은 먼저 입영신청을 하고, 입영일자가 결정된 후</span><br><span style="font-style:italic;text-decoration:underline;color:#3531FF">    휴학을 해야 학업공백기간을 줄일 수 있습니다.</span></td>
              <td class="tg-baqh">신  청  자<br>확       인<br><br><br><br><br>(인)</td>
            </tr>
            <tr>
              <td class="tg-0lax" colspan="7"></td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!--버튼-->
  <div class="btn_box">
    <a href="mailto:rgy0409@gmail.com" title="문의메일보내기"><button type="button" class="mail_btn">메일보내기</button></a>
    <a href="img/휴학계.hwp" download><button type="button" class="download_btn">다운로드</button></a>
    <button type="button" class="print_btn" onclick="printArea();">인쇄</button>
  </div>
</body>
</html>
