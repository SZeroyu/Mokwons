<!--personal_data.php-> 회원가입 정보 수정-->

<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/change_personal.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>개인정보 입력 페이지</title>

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
  </head>

<body>
<!-- check -->
  <?php
  session_start();
  if(isset($_SESSION['user_number'])){
    $user_number = $_SESSION['user_number'];
  }
  $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
  $sql = "select * from users where user_number='$user_number'; ";
  $res = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($res);
  $user_name = $row["user_name"];
  $user_address = $row["user_address"];
  $user_address_number = $row["user_address_number"];
  $user_pnumber = $row["user_pnumber"];
  $user_hnumber = $row["user_hnumber"];
  $user_email = $row["user_email"];
  $user_birthday = $row["user_birthday"];
  ?>

<div><?php include "header_1.php";?></div>
<div class="main_page01">
  <div class="page_info"><p>대학일반<span> &gt </span>개인정보<span> &gt </span><span class="page">개인정보변경<span></p></div>
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
        <li class="list active">
          <a href="#">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <span class="title">개인정보변경</span>
          </a>
        </li>
        <li class="list ">
          <a href="#">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <span class="title">졸업생정보조회</span>
          </a>
        </li>
        <li class="list ">
          <a href="#">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <span class="title">비밀번호변경</span>
          </a>
        </li>
        <li class="list ">
          <a href="#">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
            <span class="title">비밀번호이력</span>
          </a>
        </li>
       <li class="list ">
          <a href="#">
            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./js/script.js"></script>
  </div>
    <!--  사이드메뉴 끝 -->
  
    <!-- 사용자정보 수정 -->

  <form action="change_personal_data_check.php" method="post">
    <div class="user_info">
      <table>
        <tr>
          <th>학번/사번</th>
          <td><?=$user_number?></td>
        </tr>
        <tr>
          <th>이름</th>
          <td><input type="text" name="user_name" value = "<?=$user_name?>"></td>
        </tr>
        <tr>
          <th>생년월일</th>
          <td><?=$user_birthday?></td>
        </tr>
        <!-- 우편번호 -->
        <tr>
          <th rowspan="2">우편번호</th>
          <td><input type="text" class="form-control m-input" name="user_address_number" value="<?=$user_address_number?>"><input type="button"  onclick="execDaumPostcode()" value="우편번호 찾기"></td>
        </tr>
        <tr>
          <td><input type="text" class="form-control m-input" name="user_address" value="<?=$user_address?>"></td>
        </tr>

        <!-- 전화번호 -->
        <tr>
          <th rowspan="2">전화번호</th>
          <td><input type="text" name="user_pnumber" value="<?=$user_pnumber?>"></td>
        </tr>
        <tr>
          <td><input type="text" name="user_hnumber" value="<?=$user_hnumber?>"></td>
        </tr>

        <tr>
          <th>이메일</th>
          <td><input type="email" name="user_email" value="<?=$user_email?>" ></td>
        </tr>
      </table>
      <input type="submit" class="btn" value="저장">
    </div>
  </form>
</div>
</body>
</html>
