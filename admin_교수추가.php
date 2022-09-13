<!--개인정보 수집 동의 체크박스-->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>목원대학교 종합정보시스템</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/d6d6196cf4.js" crossorigin="anonymous"></script>
</head>
<body>
<div><?php include "admin_header_1.php";?></div>
<div class="main_page01">
    <div class="page_info"><p>대학일반<span> &gt </span>교수<span> &gt </span><span class="page">교수 추가<span></p></div>
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
                <li class="page_list"><p>교수</p></li>
                <li class="list active">
                    <a href="#" onclick="location.href='admin_교수추가.php'">
                            <span class="icon"><ion-icon name="person-add-outline"></ion-icon></span>
                            <span class="title">교수 추가</span>
                    </a>
                </li>
                <li class="list ">
                    <a href="#" onclick="location.href=''">
                            <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                            <span class="title">교수 검색 및 수정</span>
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
    <!-- 회원추가 입력 -->
    <div class="add_personal">
        <!-- 탭메뉴 -->
        <input type="radio" id="professor" name="grade" checked>
        <label for="professor">교 수</label>
        <input type="radio" id="file_upload" name="grade">
        <label for="file_upload">파일 업로드</label>

        <div class="content" id="professor_table">
            <!-- 교수 추가 -->
            <form action="professor_check.php" method="post">
            <table>
                    <tr>
                        <th>학번</th>
                        <td><input type="text" name="user_number" placeholder="학번"></td>
                        <th>비밀번호</th>
                        <td><input type="password" name="user_password" placeholder="비밀번호"></td>
                    </tr>
                    <tr>
                        <th>이름</th>
                        <td><input type="text" name="user_name" placeholder="이름"></td>
                        <th>생년월일</th>
                        <td><input type="text" name="user_birthday" placeholder="생년월일"></td>
                    </tr>
                    <tr>
                        <th rowspan="2">전화번호</th>
                        <td colspan="3"><input type="text" name="pnumber" placeholder="휴대전화"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" name=hnumber placeholder="집전화"></td>
                    </tr>
                    <tr>
                        <th rowspan=2>주소</th>
                        <td  colspan="2"><input type="text" name="user_address_number" id="user_address_number" placeholder="우편번호" class="form-control m-input inph_1"></td>
                        <td><button type="button" class=" btn_1"  onclick="execDaumPostcode()">우편번호 찾기</button></td> 
                    </tr>
                    <tr><td colspan="3"><input type="text" name="user_address" id="user_address" placeholder="주소+상세주소" class="form-control m-input inph_3" cols="50"></td></tr>

                    <tr>
                        <th>이메일</th>
                        <td colspan="3"><input type="email" name="user_email" placeholder="이메일"></td>
                    </tr>

                    <!-- 학사정보 -->
                    
                </table>
            </form>
        </div>
        <div class="content" id="file_upload_table">
            <table>
                <tr>
                    <td><input type="file"></td>
                </tr>
            </table>
        </div>
    </div>

</div>

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
</body>
</html>