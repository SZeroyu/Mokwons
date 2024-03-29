<!--휴학신청-->
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
    
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
</HEAD>
<body> 
  <div><?php include "header_2.php";?></div>  
  <div class="main_page01">
  <!-- 페이지 순 -->
  <div class="page_info"><p>학사행정<span> &gt </span>학적관리<span> &gt </span><span class="page">복학신청<span></p></div>
  <!-- 사이드 메뉴 -->
  <div class="side_menu">
    <div class="navigation">
      <ul>
        <li class="list ">
          <a href="#" onclick="location.href='main_학사행정.php'">
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
        <li class="list active">
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
              <thead><th colspan="7"><h1>복 학 신 청</h1></th></thead>
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
                  <td class="title">국적</td>
                  <td colspan="2"><input type="" value="국적"></td>
                </tr>
                <tr>
                  <td class="title">복학예정일자</td>
                  <td colspan="3">
                    <p id="date">
                    <script>
                      // 현재 날짜 나오는 script
                        let next = new Date();
                        let next_year = next.getFullYear();
                        let next_month = next.getMonth()+1;

                        document.getElementById('date').innerHTML = next_year + "년 &nbsp" + next_month + "월 &nbsp";
                    </script> 
                    </p>

                  
                  </td>
                  <td class="title">복학 구분</td>
                  <td colspan="2">일 반 복 학</td>
                </tr>
                <tr>
                  <td class="title">복학신청학기</td>
                  <td colspan="3">
                    <span id="sem_date">
                      <script>
                        // 현재 날짜 나오는 script
                          let sem = new Date();
                          let sem_year = sem.getFullYear();

                          document.getElementById('sem_date').innerHTML = sem_year + "년 &nbsp";
                      </script> 
                    </span>
                    <span>
                      <select name="" id="semester" >
                        <option value="0" selected>선택</option>
                        <option value="1">1학기</option>
                        <option value="2">2학기</option>
                      </select>
                    </span>
                  </td>
                  <td class="title">생년월일</td>
                  <td colspan="2"><?=$user_birthday?></td>
                </tr>
                <tr class="user_sign">
                  <td colspan="7">
                    <p>본인은 위와같이 복학하고자 하오니 허락하여 주시기 바랍니다.</p>
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
                      <li>
                        국복학일 경우 병적사항이 기재된 서류(전역증 또는 병적사항이 기재된 주민등록초본, 병적 증명서 중 1부)를 첨뷰하여 학사지원과에 제출
                        <p>- 단, 첨부서류 중 사진과 담당자 도장이 없는 전역증 사본은 인정하지 않습니다.</p>
                        <p>- 직접 방문이 어려울 경우 FAX(042-829-7975)로 서류 접수 후 확인전화 바랍니다.</p>
                      </li>
                      <li>전역예정자는 개강 후 5주이내 전역자에 한함(전역예정확인서, 휴가증 및 소속장의 허가원을 받아 제출하여 함)</li>
                      <li>군필자느 예비군 전입신고를 해야함</li>
            
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
                목원대학교에서 <b>복학 목적의 학적처리</b>와 관련하여 귀하의 개인정보를 아래와 같이 수집·이용하고자 합니다.
                다음의 사항에 대해 충분히 읽어보신 후 동의 여부를 체크, 서명하여주시기 바랍니다.
              </p>
            </div>
            <div class="body">
              <h3>개인정보 수집·이용 동의</h3>
              <ul class="title">
                <li><h3>■ 개인정보 수집·이용 목적 : 휴학 목적의 학적처리</h3></li>
                <li>
                  <h3>■ 수집하는 개인정보의 항목</h3>
                  <ul>
                    <li>
                      ○ 필수정보
                      <p>- 학번, 성명, 소속 학과(전공), 연락처, 생년월일, 이수학기, 학적상태, 부모님 성명,부모님 전화번호, 휴학유형, 휴학사유</p>
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
      <footer><button><a href="https://mokwon.ac.kr/kr/html/sub09/090501.html" target='_blank' >개인정보처리방침 바로가기</a><ion-icon name="open-outline"></ion-icon></button></footer>
      <div class="btn_box">
          <a href="mailto:rgy0409@gmail.com" title="문의메일보내기"><button type="button" class="mail_btn">메일보내기</button></a>
          <a href="img/휴학계.hwp" download><button type="button" class="download_btn">다운로드</button></a>
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
