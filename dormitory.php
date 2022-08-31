<!--생활관신청-->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/academic_1.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <div><?php include "header_2.php";?></div>

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
    <BODY>
    <div class="main_page01">
    <!-- 페이지 순 -->
      <div class="page_info"><p>학사행정<span> &gt </span>생활관<span> &gt </span><span class="page">생활관입사신청<span></p></div>
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
  </div>
    <br>
    <div class="print_table">
    <div id="idPrint">
      <style type="text/css">
      .tg  {border-collapse:collapse;border-spacing:0;}
      .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        overflow:hidden;padding:10px 5px;word-break:normal;}
      .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
        font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
      .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
      .tg .tg-p8sp{border-color:inherit;font-size:20px;text-align:center;vertical-align:top}
      .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
      .tg .tg-387r{border-color:inherit;font-size:13px;text-align:left;vertical-align:top}
      .tg .tg-76qt{border-color:inherit;font-size:13px;text-align:center;vertical-align:top}
      </style>
      <table class="tg">
      <thead>
        <tr>
          <th class="tg-p8sp" colspan="15">생활관 입사신청서<br>(재학생 및 대학원 신입생)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="tg-0pky" colspan="2" rowspan="14"></td>
          <td class="tg-c3ow" colspan="2">입사구분<br></td>
          <td class="tg-387r" colspan="3">□재학생(초과학기 학생)<br>□대학원 신입생</td>
          <td class="tg-0pky" colspan="2">생활관</td>
          <td class="tg-387r" colspan="3">□서관(남)        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;□동관(여)<br>□신축(1인실) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; □신축(2인실)</td>
          <td class="tg-0pky" colspan="3" rowspan="14"></td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2" rowspan="2"><br>성명<br></td>
          <td class="tg-c3ow">한글</td>
          <td class="tg-0pky" colspan="2"></td>
          <td class="tg-c3ow" colspan="2">소속</td>
          <td class="tg-76qt" colspan="3">대학(원) 학과(전공, 부)</td>
        </tr>
        <tr>
          <td class="tg-c3ow">학번</td>
          <td class="tg-0pky" colspan="2"></td>
          <td class="tg-c3ow" colspan="2">생년월일</td>
          <td class="tg-0pky">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
          <td class="tg-c3ow">본인 연락처</td>
          <td class="tg-0pky">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">보호자성명</td>
          <td class="tg-0pky" colspan="3"></td>
          <td class="tg-c3ow" colspan="2">관계</td>
          <td class="tg-0pky"></td>
          <td class="tg-c3ow">보호자 연락처</td>
          <td class="tg-0pky"></td>
        </tr>
        <tr>
          <td class="tg-0pky" colspan="2" rowspan="2"><br><br><br>주소 및 연락처</td>
          <td class="tg-0pky" colspan="8" rowspan="2">우편번호() TEL:()<br><br><br><br><br><br>※주소는 정확히 기재바라며, 변동 시 사무실로 연락하시기 바랍니다.</td>
        </tr>
        <tr>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="10">◐생활관 이용 서약◑</td>
        </tr>
        <tr>
          <td class="tg-0pky" colspan="10">본인은 목원대학교 생활관에 입사함에 있어 생활관 규정과 운영수칙 제 9조의 사생의무사항 및 모든 수칙<br>을 준수하고 성실한 자세로서 공동생활을 통한 협동과 단결은 물론 학문을 넓히고 인격을 닦는데 전념할 <br>것을 다짐함과 동시에 특별히 아래의 사항을 책임지고 지킬 것을 보호자와 함께 서약합니다.<br><br><br>1. 생활관 운영수칙(규정)을 반드시 지키고, 위반하지 않겠습니다.<br>2. 운영수칙 제 18조, 19조에 의거하여 책정된 생활관 입사비용항목 및 환불정책에 대하여<br>동의하고 이의를 제기하지 않겠습니다.<br>3. 운영수칙 제 7조, 제 15조, 제27조에 의거하여 생활관의 원만한 운영을 위해 생활관장 및 직원들의<br>&nbsp;&nbsp;&nbsp;&nbsp;지도에 반드시 따르겠습니다.<br>4. 운영수칙 제 5조, 제 6조에 의거하여 생활관 일과 및 점호 실시에 대하여 준수하겠습니다.<br>5. 운영수칙 제 10조에 의거하여 관내 시설물 및 개인비품 파손 시 즉시 변상하겠습니다.<br>6. 운영수칙 제 21조에 의거하여 "관생자치위원회" 구성에 동의하고 임원들의 활동에 성의를 다하여<br>&nbsp;&nbsp;&nbsp;협조하며 "관생자치위원회"가 주관하여 실시하는 모든 행사에 반드시 참여하고 자발적으로<br>&nbsp;&nbsp;&nbsp;협조하겠습니다.<br>7. 개인 물푼의 보관 및 관리는 본인이 책임지겠습니다.<br>8. 신학대학(원)생에 한하여서는 새벽 기도회에 반드시 참여하겠습니다.<br>9. 운영수칙 제 28조에 의거하여 생활관 퇴사 절차를 따르겠습니다.<br>10. 운영수칙 제 23조, 제 25조에 의거 다음의 상, 벌점 기준을 준수하겠습니다.<br>11. 생활관 내 금주, 금연을 서약하겠습니다.<br>※ 음주, 흡연시 퇴사!!<br>□개인정보 수집 이용 동의<br></td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">구분</td>
          <td class="tg-c3ow" colspan="6">항목</td>
          <td class="tg-c3ow">수집목적</td>
          <td class="tg-c3ow">보유기간</td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2"><br>필수</td>
          <td class="tg-76qt" colspan="6">소속, 학번(수험번호), 성명, 학년, 성별, 생년월일,<br>전화번호(보호자, 본인), 주소, 성적</td>
          <td class="tg-76qt">생활관 입사 지원<br>학생 선발<br>관생관리 및 학부모 연락</td>
          <td class="tg-76qt">선발자:준영구<br><br>탈락자:5년</td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">필수</td>
          <td class="tg-c3ow" colspan="8">개인정보 수집 이용 동의&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;□예&nbsp;&nbsp;&nbsp;&nbsp;□아니요</td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2"><br>선택</td>
          <td class="tg-76qt" colspan="6">질병 등 건강정보, 생체 정보</td>
          <td class="tg-76qt">생활관 입사 지원<br>학생 선발<br>관생관리 및 학부모 연락</td>
          <td class="tg-76qt">선발자 : 준영구<br>탈락자 : 5년</td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">선택</td>
          <td class="tg-0pky" colspan="8">민감정보 수집 이용 동의&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;□예&nbsp;&nbsp;&nbsp;&nbsp;□아니요</td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="10">위 본인은 목원대학교 학생 생활관에 입사하고자 신청서를 제출합니다.<br>20&nbsp;&nbsp;&nbsp;&nbsp;년&nbsp;&nbsp;&nbsp;&nbsp;월&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일<br><br><br>신청자 :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(서명)<br><br><br>목원대학교 생활관장 귀하</td>
        </tr>
      </tbody>
      </table>
      </div>
      </div>
       <!--버튼-->
  <div class="btn_box">
    <a href="mailto:rgy0409@gmail.com" title="문의메일보내기"><button type="button" class="mail_btn">메일보내기</button></a>
    <a href="img/입사신청서.hwp" download><button type="button" class="download_btn">다운로드</button></a>
    <button type="button" class="print_btn" onclick="printArea();">인쇄</button>
  </div>
      

    </HTML>
