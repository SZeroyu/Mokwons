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
    <script src="./js/index.js"></script>
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>

    </HEAD>
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
    </div>
<!-- 휴학신청 프린트 영역 -->
    <div class="print_table">
    <div id="idPrint">
      <!-- <table class="tg">
      <thead>
        <tr>
          <th class="tg-bwtg" colspan="15"><span style="text-decoration:underline">자  퇴  원</span></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="tg-c3ow" rowspan="13"></td>
          <td class="tg-c3ow" colspan="2">학 번 /&nbsp;&nbsp;학 년</td>
          <td class="tg-c3ow">        </td>
          <td class="tg-c3ow" colspan="2">      </td>
          <td class="tg-c3ow" colspan="3">성 명</td>
          <td class="tg-c3ow" colspan="4">     </td>
          <td class="tg-0pky" colspan="2" rowspan="13"></td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">소 속</td>
          <td class="tg-c3ow" colspan="3">공과대학 융합컴퓨터 미디어학부</td>
          <td class="tg-c3ow" colspan="3">전 공</td>
          <td class="tg-c3ow" colspan="4">              </td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">전 화 번 호</td>
          <td class="tg-c3ow" colspan="3">            </td>
          <td class="tg-c3ow" colspan="3">이 수 학 기</td>
          <td class="tg-c3ow" colspan="4">      </td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">보호자연락처</td>
          <td class="tg-c3ow" colspan="3">            </td>
          <td class="tg-c3ow" colspan="3">생 년 월 일</td>
          <td class="tg-c3ow" colspan="4">             </td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2">병 력 사 항</td>
          <td class="tg-c3ow" colspan="6">민방위 * 예비군 * 입영대상 * 현역 * 여학생 * 기타</td>
          <td class="tg-c3ow" colspan="3">국 적</td>
          <td class="tg-c3ow">            </td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="2"><br>자 퇴 사 유</td>
          <td class="tg-c3ow" colspan="10">□ 신*편입학(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;대학교)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;□ 전공과적성불일치&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;□ 취업<br>□유학(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;대학교)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;□ 등록금부담&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;□ 가사</td>
        </tr>
        <tr>
          <td class="tg-c3ow" colspan="12">본인은 위와 같이 자퇴하고자 하오니 허락하여 주시기 바랍니다.<br><br>년          월          일<br><br> 본 인 성명:                    (인)<br>보호자성명:                    (인)</td>
        </tr>
        <tr>
          <td class="tg-0pky" rowspan="2"><br><br>경 유</td>
          <td class="tg-c3ow">지도교수</td>
          <td class="tg-c3ow">학과(부)장</td>
          <td class="tg-c3ow" colspan="2">도서관<br>(도서관대출)</td>
          <td class="tg-c3ow" colspan="3">국제교육원<br>(외국인전용)</td>
          <td class="tg-c3ow" colspan="2">예비군연대</td>
          <td class="tg-c3ow" colspan="2">장학지원과</td>
        </tr>
        <tr>
          <td class="tg-dvpl">(인)</td>
          <td class="tg-dvpl">(인)</td>
          <td class="tg-dvpl" colspan="2">(인)</td>
          <td class="tg-dvpl" colspan="3">(인)</td>
          <td class="tg-dvpl" colspan="2">(인)</td>
          <td class="tg-dvpl" colspan="2">(인)</td>
        </tr>
        <tr>
          <td class="tg-bwtg" colspan="12" rowspan="2">목 원 대 학 교&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;총 장&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;귀 하</td>
        </tr>
        <tr>
        </tr>
        <tr>
          <td class="tg-0pky" rowspan="2">유<br>의<br>사<br>항</td>
          <td class="tg-0pky" colspan="11" rowspan="2">1. 자퇴절차 : 학과사무실(상담 및 확인) → 장학지원과(장학금 및 학자금대출확인) →<br>&nbsp;&nbsp;&nbsp;&nbsp;학사지원과(서류접수 및 처리)<br>2. 부모님 확인전화 후 자퇴처리 되오니 이동번호란에 부모님 번호를 적어주시기 바랍니다.<br>3. 뒷장 자퇴통지서 반환 게좌번호는 반드시 부모님 계좌번호를 적어주시기 바랍니다.<br>4. 자퇴처리 1년 이후(자퇴처리 학기부터 2학기 지난 기준) 재입학 지원 가능합니다.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(단, 기존학과로만 재입학 가능하며 해당학과에 여식이 있는 경우 가능합니다.)</td>
        </tr>
        <tr>
        </tr>
        <tr>
          <td class="tg-0pky" colspan="15"></td>
        </tr>
      </tbody>
      </table> -->
    </div>
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
  $user_pnumber = $row["user_pnumber"];
  $user_hnumber = $row["user_hnumber"];
  $user_class = $row["user_class"];
  $user_birthday = $row["user_birthday"];
  ?>
        <table>
            <thead><th>자퇴원</th></thead>
            <tbody>
                <tr>
                    <td class="title">학번/학년</td>
                    <td><?=$user_number?></td>
                    <td><?=$user_class?>학년</td>
                    <td class="title">이름</td>
                    <td colspan="3"><?=$user_name?></td>
                </tr>
                <tr>
                    <td>소속</td>
                    <td colspan="2"><?=$user_affiliation?></td>
                    <td>전공</td>
                    <td colspan="3"><?=$user_major?></td>
                </tr>
                <tr>
                    <td>전화번호</td>
                    <td colspan="2">
                        <select name="phone" onChange="selectphone(this)">
                            <option value="1" name="f">010</option>
                            <option value="2" name="s">011</option>
                        </select>
                        <input type="tel" maxlength='4' name="phone2">
                        <input type="tel" maxlength='4' name="phone3">
                    </td>
                    <td>이수학기</td>
                    <td colspan="3"><?=$user_semester?></td>
                </tr>
                <tr>
                    <td>보호자연락처</td>
                    <td colspan="3">
                        <select name="phone" onChange="selectphone(this)">
                            <option value="1" name="f">010</option>
                            <option value="2" name="s">011</option>
                        </select>
                        <input type="tel" maxlength='4' name="phone2">
                        <input type="tel" maxlength='4' name="phone3">
                    </td>
                    <td>생년월일</td>
                    <td colspan="4"><?=$user_birthday?></td>
                </tr>
                <tr>
                    <td>병력사항</td>
                    <td colspan="4">
                        <select name="병력사항" id="">
                            <option value="" selected>병력사항선택</option>
                            <option value="">민방위</option>
                            <option value="">예비군</option>
                            <option value="">입영대상</option>
                            <option value="">현역</option>
                            <option value="">여학생</option>
                            <option value="">기타</option>
                        </select>
                    </td>
                    <td>국적</td>
                    <td><input type="" value="국적"></td>
                </tr>
                <tr>
                    <td>자퇴사유</td>
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
                <tr>
                    <td colspan="7">
                        <p>본인은 위와같이 자퇴하고자 하오니 허락하여 주시기 바랍니다.</p>
                        <div id="date"></div>
                        <p>본인 성명 : (인)</p>
                        <p>부모님 성명 : (인) </p>
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
                <tr>
                    <td>(인)</td>
                    <td>(인)</td>
                    <td>(인)</td>
                    <td>(인)</td>
                    <td>(인)</td>
                    <td>(인)</td>
                </tr>
                <tr><td colspan="7">목원대 총장 귀하</td></tr>
            </tbody>
            <tfoot>
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
    </div>
      </div>
      <script>
    function dropout(ele){
    var $ele = $(ele);
    var $dropout_res = $('input[name=dropout_res]');

    // '1'인 경우 직접입력
    if($ele.val() == "1" || $ele.val() == "2" || $ele.val() == "3"){
        $dropout_res.attr('readonly', false);
        $dropout_res.val('');

    } else {
        $dropout_res.attr('readonly', true);
        $dropout_res.val($ele.val());
    }

    if($ele.val() == "1" || $ele.val() == "2"){
            document.getElementById('check').innerHTML='*대학교를 작성해주세요'
            document.getElementById('check').style.color='gray';
        }else{
            document.getElementById('check').innerHTML=''
            document.getElementById('check').style.color='gray';
        }
    if($ele.val() == "3"){
            document.getElementById('check').innerHTML='*기타사유를작성해주세요'
            document.getElementById('check').style.color='gray';
        }
}

//010.011 입력방식 선택
function selectphone(ele){
    var $ele = $(ele);
    var $f = $('option[name=f]');
    var $s = $('option[name=s]');

    $f.attr('readonly', true);
    $f.val($ele.val());
     
    
}
// 오늘날짜 나오게하는 법
let today = new Date();
let year = today.getFullYear();
let month = today.getMonth();
let date = today.getDate();

document.write(year + '년' + month + '월' + date + '일');
</script>
  <!--버튼-->
  <div class="btn_box">
    <a href="mailto:rgy0409@gmail.com" title="문의메일보내기"><button type="button" class="mail_btn">메일보내기</button></a>
    <a href="img/자퇴원.hwp" download><button type="button" class="download_btn">다운로드</button></a>
    <button type="button" class="print_btn" onclick="printArea();">인쇄</button>
  </div>
  </BODY> </HTML>

  