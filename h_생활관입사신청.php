<!--자퇴신청-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/print.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/academic_5.css" />
    <script src="./js/index.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
</head>
<body> 
    <div><?php include "header_2.php";?></div> 
    <div class="main_page01">
    <!-- 페이지 순 -->
      <div class="page_info"><p>학사행정<span> &gt </span>생활관<span> &gt </span><span class="page">생활관입사신청</span></p></div>
      <!-- 사이드 메뉴 -->
      <div class="side_menu">
        <div class="navigation">
          <ul>
            <li class="list ">
              <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="desktop-outline"></ion-icon></span>
                <span class="title">학사행정</span>
              </a>
            </li>
            <li class="page_list"><p>생활관</p></li>
            <li class="list active">
              <a href="#" onclick="location.href='h_생활관입사신청.php'">
                <span class="icon"><ion-icon name="business-outline"></ion-icon></ion-icon></span>
                <span class="title">생할관입사신청</span>
              </a>
            </li>
            <li class="list ">
              <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="journal-outline"></ion-icon></span>
                <span class="title">생활관카드작성</span>
              </a>
            </li>
            <li class="list " >
              <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="bicycle-outline"></ion-icon></span>
                <span class="title">생활관외박신청</span>
              </a>
            </li>
            <li class="list " >
              <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="create-outline"></ion-icon></span>
                <span class="title">생활관퇴사신청</span>
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
            <div class="dormitory">
              <div class="notice">
                <p> 생활관 이용서약 </p>
                <p>
                  본인은 목원대학교 생활관에 입사함에 있어 생활관 규정과 운영수칙 제 9조의 사생 의무사항 및 모든 수칙을
                  준수하고 성실한 자세로서 공동생활을 통한 협동과 단결은 물론 학문을 넓히고 인격을 닦는데 전념할 것을
                  다짐함과 동시에 특별히 아래의 사항을 책임지고 지킬 것을 보호자와 함께 서약합니다.
                </p>
                <ol type="1">
                  <li>생활관 운영수칙(규정)을 반드시 지키고, 위반하지 않겠습니다.</li>
                  <li>운영수칙 제 18조, 19조에 의거하여 책정된 생활관 입사비용항목 및 환불정책에 대하여 동의하고 이의를 제기하지 않겠습니다.</li>
                  <li>운영수칙 제 7조, 제 15조, 제27조에 의거하여 생활관의 원만한 운영을 위해 생활관장 및 직원들의 지도에 반드시 따르겠습니다.</li>
                  <li>운영수칙 제 5조, 제 6조에 의거하여 생활관 일과 및 점호 실시에 대하여 준수하겠습니다.</li>
                  <li>운영수칙 제 10조에 의거하여 관내 시설물 및 개인비품 파손 시 즉시 변상하겠습니다.</li>
                  <li>운영수칙 제 21조에 의거하여 "관생자치위원회" 구성에 동의하고 임원들의 활동에 성의를 다하여 협조하며 "관생자치위원회"가 주관하여 실시하는 모든 행사에 반드시 참여하고 자발적으로 협조하겠습니다.</li>
                  <li>개인 물푼의 보관 및 관리는 본인이 책임지겠습니다.</li>
                  <li>신학대학(원)생에 한하여서는 새벽 기도회에 반드시 참여하겠습니다.</li>
                  <li>운영수칙 제 28조에 의거하여 생활관 퇴사 절차를 따르겠습니다.</li>
                  <li>운영수칙 제 23조, 제 25조에 의거 다음의 상, 벌점 기준을 준수하겠습니다.</li>
                  <li>생활관 내 금주, 금연을 서약하겠습니다.</li>
                </ol>
                <p>※ 생활관 내에서 음주, 흡연시 퇴사 ※</p>
              </div>
              <div class="info">
                <h2>
                  생활관입사신청서
                  <p>(재학생/대학원신입생)</p>
                </h2>
                <table>
                  <tr>
                    <td>성명</td>
                    <td>
                      <label for="name"></label>
                      <input type="text" id="name">
                    </td>
                    <td>학번</td>
                    <td>
                      <label for="name"></label>
                      <input type="text" id="name">
                    </td>
                    <td>생년월일</td>
                    <td>
                      <label for="name"></label>
                      <input type="text" id="name">
                    </td>
                  </tr>
                  <tr>
                    <td>입사구분</td>
                    <td colspan="2">
                      <select name="" id="">
                        <option value="">선택</option>
                        <option value="">재학생</option>
                        <option value="">대학원신입생</option>
                      </select>
                    </td>
                    <td>생활관</td>
                    <td colspan="2">
                      <select name="" id="">
                        <option value="">선택</option>
                        <option value="">서관(남)</option>
                        <option value="">동관(여)</option>
                        <option value="">신축 1인실</option>
                        <option value="">신축 2인실</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>보호자 성명</td>
                    <td colspan="2">
                      <label for="name"></label>
                      <input type="text" id="name">
                    </td>
                    <td>관계</td>
                    <td colspan="2">
                      <label for="name"></label>
                      <input type="text" id="name">
                    </td>
                  </tr>
                  <tr>
                    <td>본인연락처</td>
                    <td colspan="2">
                      <label for="name"></label>
                      <input type="text" id="name">
                    </td>
                    <td>보호자연락처</td>
                    <td colspan="2">
                      <label for="name"></label>
                      <input type="text" id="name">
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2">주소</td>
                    <td>우편번호</td>
                    <td colspan="4">
                      <label for="name"></label>
                      <input type="text" name="user_address_number" value="" id="user_address_number" placeholder="우편번호" class="form-control m-input inph_1"><button class=""  onclick="execDaumPostcode()">우편번호찾기</button>
                    </td>
                  </tr>
                  <tr>
                    <td>주소</td>
                    <td colspan="4">
                      <label for="name"></label>
                      <input type="text" name="user_address" id="user_address" value=""placeholder="주소+상세주소" class="form-control m-input inph_2">
                    </td>
                  </tr>
                </table>
               
              </div>
            </div>
            <!-- <table>
              <thead>
                <th colspan="7">
                    <h1>
                        생활관입사신청서
                        <p>(재학생및대학원신입생)</p>
                    </h1>
                </th>
            </thead>
              <tbody>
              <tr>
                  <td class="title">입사구분</td>
                  <td colspan="2">
                    <select name="병력사항" id="">
                      <option value="" selected> 선택</option>
                      <option value="">재학생(초과학기 학생)</option>
                      <option value="">대학원 신입생</option>
                    </select>
                  </td>
                  <td  class="title">생활관</td>
                  <td colspan="3">
                    <select name="생활관" id="">
                      <option value="" selected> 선택</option>
                      <option value="">서관(남)</option>
                      <option value="">동관(여)</option>
                      <option value="">신축 1인실</option>
                      <option value="">신축 2인실</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="title">학번/학년</td>
                  <td colspan="2"><?=$user_number?></td>
                  <td><?=$user_class?>학년</td>
                  <td class="title">이름</td>
                  <td colspan="2"><?=$user_name?></td>
                </tr>
                <tr>
                  <td class="title">소속</td>
                  <td colspan="2"><?=$user_major?></td>
                  <td class="title">전화번호</td>
                  <td colspan="3"><?=$user_pnumber?></td>
                </tr>
                <tr>
                  <td class="title">보호자성명</td>
                  <td>
                    <input type="text" id="name">
                    <label for="name"></label>
                  </td>
                  <td class="title">보호자연락처</td>
                  <td colspan="2">
                    <select name="phone" onChange="selectphone(this)">
                      <option value="1" name="f">010</option>
                      <option value="2" name="s">011</option>
                    </select>
                    <input type="tel" maxlength='4' name="phone2">
                    <input type="tel" maxlength='4' name="phone3">
                  </td>
                  <td class="title">관계</td>
                  <td>
                    <input type="text" id="name">
                    <label for="name"></label>
                  </td>
                </tr>
                <tr>
                  <td>주소 및 연락처</td>
                  <td colspan="6">
                    <label for="address_number">우편번호</label>
                    <input type="text" id="address_number">
                    <p>
                      <label for="address">주소</label>
                      <input type="text" id="address">
                    </p>

                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr><td colspan="7">생활관이용서약</td></tr>
                <tr>
                  <td colspan="7">
                  
                  </td>
                </tr>

                <tr class="user_sign">
                  <td colspan="7">
                    <p>위 본인은 목원대학교 학생생활관에 입사하고자 신청서를 제출합니다.</p>
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
                    <p>신청자 : <span>&nbsp</span> (인)</p>
                  </td>
                </tr>
                <tr><td colspan="7"><h1>목원대학교 생활관장 귀하</h1></td></tr>
              </tfoot>
            </table> -->
          </div>
          
        </div>
      </div>
    </div>
   
      <!--버튼-->
      <footer><button title="새창"><a href="https://www.mokwon.ac.kr/dormitory/" title="새창" target='_blank' >목원대 생활관 홈페이지 바로가기</a><ion-icon name="open-outline"></ion-icon></button></footer>
      <div class="btn_box">
          <a href="mailto:rgy0409@gmail.com" title="문의메일보내기"><button type="button" class="mail_btn">메일보내기</button></a>
          <a href="img/자퇴원.hwp" download><button type="button" class="download_btn">다운로드</button></a>
          <button type="button" class="print_btn" onclick="printArea();">인쇄</button>
      </div>
      
</body> 
</html>
<!--우편 번호 찾기-->
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
    function execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }}

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.querySelector('#user_address_number').value = data.zonecode;
                document.querySelector("#user_address").value = addr;
            }
        }).open();
    }
</script>


  