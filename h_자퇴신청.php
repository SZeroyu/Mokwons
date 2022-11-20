<!--자퇴신청-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/academic.css" />
    <script src="./js/index.js"></script>
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
            <li class="list ">
              <a href="#" onclick="location.href='h_졸업논문계획서.php'">
                <span class="icon"><ion-icon name="document-text-outline"></ion-icon></span>
                <span class="title">졸업논문계획서</span>
              </a>
            </li>
            <li class="list ">
              <a href="#" onclick="location.href='h_복학신청.php'">
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
            <li class="list active" >
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
        <!-- 자퇴신청 프린트 영역 -->
        <div class="print_table"  media="print">
          <div id="idPrint">

          <!-- 첫페이지 -->
          <div class="write_info">
            <?php
                if(isset($_SESSION['user_number'])){
                $user_number = $_SESSION['user_number'];
                }
                $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
                $sql = "select * from users where user_number='$user_number'; ";
                $res = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($res);
                $user_name = $row["user_name"];
                $user_affiliation = $row["user_affiliation"];
                $user_semester = $row["user_semester"];
                $user_class = $row["user_class"];
                $user_minor = $row["user_minor"];
                $user_pnumber = $row["user_pnumber"];
                $user_birthday = $row["user_birthday"];
            ?>
            <table>
              <thead><th colspan="7"><h1>자 퇴 원</h1></th></thead>
              <tbody>
                <tr>
                  <td class="title">학번/학년</td>
                  <td colspan="2"><?=$user_number?></td>
                  <td><?=$user_class?>학년</td>
                  <td class="title">이름</td>
                  <td colspan="2"><?=$user_name?></td>
                </tr>
                <tr>
                  <td class="title">소속</td>
                  <td colspan="3"><?=$user_major?></td>
                  <td class="title">전공</td>
                  <td colspan="2"><?=$user_minor?></td>
                </tr>
                <tr>
                  <td class="title">전화번호</td>
                  <td colspan="3">
                    <input type="text" value="<?=$user_pnumber?>" >
                  </td>
                  <td class="title">이수학기</td>
                  <td colspan="2"><?=$user_semester?></td>
                </tr>
                <tr>
                  <td class="title">보호자연락처</td>
                  <td colspan="3">
                    <select name="phone" onChange="selectphone(this)">
                      <option value="1" name="f">010</option>
                      <option value="2" name="s">011</option>
                    </select>
                    <input type="tel" maxlength='4' name="phone2">
                    <input type="tel" maxlength='4' name="phone3">
                  </td>
                  <td class="title">생년월일</td>
                  <td colspan="2"><?=$user_birthday?></td>
                </tr>
                <tr>
                  <td class="title">병력사항</td>
                  <td colspan="3">
                    <select name="병력사항" id="">
                      <option value="" selected>병력사항 선택</option>
                      <option value="">민방위</option>
                      <option value="">예비군</option>
                      <option value="">입영대상</option>
                      <option value="">현역</option>
                      <option value="">여학생</option>
                      <option value="">기타</option>
                    </select>
                  </td>
                  <td class="title">국적</td>
                  <td colspan="2"><input type="" value="국적"></td>
                </tr>
                <tr>
                  <td class="title">자퇴사유</td>
                  <td colspan="6">
                    <select name="dropout" id="dropout" onChange="dropout(this)">
                        <option value="사유선택" selected>사유선택</option>
                        <option value="1">신*편입학</option>
                        <option value="2">유학</option>
                        <option value="전공과 적성불일치">전공과 적성불일치</option>
                        <option value="등록금부담">등록금부담</option>
                        <option value="취업">취업</option>
                        <option value="가사">가사</option>
                        <option value="3">기타</option>
                    </select>
                    <input type="text" name="dropout_res" id="dropout_res"> <span id="check"></span>
                  </td>
                </tr>
                <tr class="user_sign">
                  <td colspan="7">
                    <p>본인은 위와같이 자퇴하고자 하오니 허락하여 주시기 바랍니다.</p>
                    <p id="ex_date">
                      <script>
                      // 현재 날짜 나오는 script
                        let today = new Date();
                        let year = today.getFullYear();
                        let month = today.getMonth()+1;
                        let day = today.getDate();

                        document.getElementById('ex_date').innerHTML = year + "년 &nbsp" + month + "월 &nbsp" + day + "일";
                      </script>
                    </p>
                    <p>본인 성명 : <span>&nbsp</span> (인)</p>
                    <p>부모님 성명 : <span>&nbsp</span>(인) </p>
                  </td>
                </tr>
                <tr>
                  <td rowspan="2">경유</td>
                  <td>지도교수</td>
                  <td>학과(부)장</td>
                  <td>도서관(도서관대출)</td>
                  <td>국제교육원(외국인전용)</td>
                  <td>예비군연대</td>
                  <td>장학지원과</td>
                </tr>
                <tr class="sign">
                  <td><p>(인)</p></td>
                  <td><p>(인)</p></td>
                  <td><p>(인)</p></td>
                  <td><p>(인)</p></td>
                  <td><p>(인)</p></td>
                  <td><p>(인)</p></td>
                </tr>
              </tbody>
              <tfoot>
                <tr><td colspan="7"><h1>목원대 총장 귀하</h1></td></tr>
                <tr>
                  <td>유의사항</td>
                  <td colspan="6">
                    <ol type="1">
                      <li>자퇴절차 : 학과사무실(상담 및 확인) → 장학지원과(장학금 및 학자금대출확인) →
                          학사지원과(서류접수 및 처리)</li>
                      <li>부모님 확인전화 후 자퇴처리 되오니 이동번호란에 부모님 번호를 적어주시기 바랍니다.</li>
                      <li>뒷장 자퇴통지서 반환 게좌번호는 반드시 부모님 계좌번호를 적어주시기 바랍니다.</li>
                      <li>자퇴처리 1년 이후(자퇴처리 학기부터 2학기 지난 기준) 재입학 지원 가능합니다.
                          (단, 기존학과로만 재입학 가능하며 해당학과에 여식이 있는 경우 가능합니다.)</li>
                    </ol>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
          <div class="info_mwn">
            <div class="head">
              <h2>[개인정보 수집·이용 동의서]</h2>
              <p>
                목원대학교에서 <b>자퇴 목적의 학적처리</b>와 관련하여 귀하의 개인정보를 아래와 같이 수집·이용하고자 합니다.
                다음의 사항에 대해 충분히 읽어보신 후 동의 여부를 체크, 서명하여주시기 바랍니다.
              </p>
            </div>
            <div class="body">
              <h3>개인정보 수집·이용 동의</h3>
              <ul class="title">
                <li><h3>■ 개인정보 수집·이용 목적 : 자퇴 목적의 학적처리</h3></li>
                <li>
                  <h3>■ 수집하는 개인정보의 항목</h3>
                  <ul>
                    <li>
                      ○ 필수정보
                      <p>- 학번, 성명, 소속 학과(전공), 연락처, 학년, 생년월일, 이수학기, 학적상태, 부모님 성명, 부모님 전화번호, 자퇴유형, 자퇴사유</p>
                    </li>
                    <li>○ 선택정보 : 계좌번호</li>
                  </ul>
                </li>
                <li>
                  <h3>■ 개인정보의 보유 및 이용기간(파기 전까지)</h3>
                  <ul>
                    <li>
                      ○ 학적처리 이용기간까지 보유하며, 민원처리를 위해 10년간 보관합니다.
                      <p>- 개인정보 보유기간 경과, 처리목적 달성 등 개인정보가 불필요하게 된 경우는 지체없이 해당 개인정보를 파기합니다.</p>
                    </li>
                  </ul>
                </li>
                <li>
                  <h3>■ 동의 거부 권리 안내</h3>
                  <ul>
                    <li> ○ 개인정보의 수집 및 이용 동의에 대해 거부할 수 있습니다. 거부 시 자퇴 관련 업무 이용에 제한이 있을 수도 있습니다.</li>
                    <li> 
                      ○ 개인정보의수집 및 이용에동의하십니까? 
                      <span>
                        <input type="checkbox" id="yes">
                        <label for="yes">동의함&nbsp;&nbsp;&nbsp;</label>
                        <input type="checkbox" id="no">
                        <label for="no">동의하지 않음</label>
                      </span>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="footer">
              <h3>&lt;본인 확인 및 동의 안내&gt;</h3>
              <b><span>개인정보 수집 이용 동의서</span>는 본인만 작성하여 동의할 수 있습니다. 목원대학교 개인정보처리방침은 홈페이지를 참조해 주시기 바랍니다.</b>
              <!--  -->
              <div class="info">
                <p>
                  위의 관련 내용을 모두 확인하였음, 신청자 본인이 직접 작성하였음을 확인합니다.
                </p>
                <p class="ymd">년&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;월&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;일</p>
                <p class="sing">신청자:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(서명)</p>
              </div>
              <h2>목 원 대 학 교 총 장</h2>
            </div>
          </div>
        </div>
      </div>

    </div>
   
      <!--버튼-->
      <footer><button title="새창"><a href="https://mokwon.ac.kr/kr/html/sub09/090501.html" title="새창" target='_blank' >개인정보처리방침 바로가기</a><ion-icon name="open-outline"></ion-icon></button></footer>
      <div class="btn_box">
          <a href="mailto:rgy0409@gmail.com" title="문의메일보내기"><button type="button" class="mail_btn">메일보내기</button></a>
          <a href="img/자퇴원.hwp" download><button type="button" class="download_btn">다운로드</button></a>
          <button type="button" class="print_btn" onclick="printArea();">인쇄</button>
          <!-- 프린트 js -->
          <script>
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
      </div>
      
</body> 
</html>


  