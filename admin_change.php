
<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/admin_change_1.css">
    <title>개인정보 수정 페이지</title>

    
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
  <div class= "top_header"></div>
    <div>
      <form action="admin_change_check.php" method="post">
          <h2> 정보 수정 하기 </h2>

      <table id="table_1" align=center  cellspacing="5">
            <tr>
            <td bgcolor="white" rowspan="3"><img src="./img/user.png" alt="Logo" width="100"></td>
            <th>학번/사번</th>
            <td ><input  type="text" name="user_number"  class="inph_1" placeholder="학번/사번"></td>
            <th>비밀번호</th>
            <td colspan="3"><input type="password" name="user_password"  value = "<?=$user_password?>"  placeholder="비밀번호" class="inph_1"></td></tr>
            <tr>
            
            <tr>
            <th>이름</th>
            <td><input type="text" name="user_name"   class="inph_1"  value = "<?=$user_name?>"  placeholder="이름"></td>
            <th>생년월일</th>
            <td><input type="text" name="user_birthday"  value = "<?=$user_birthday?>"  placeholder="ex) 20001127" class="inph_1"></td>
            <tr>
            
            <th colspan="5"><p>개인</p></th>
            <tr><th rowspan="3">전화번호</th>
            <tr> <td colspan="3"><input type="text" name="user_pnumber"   value = "<?=$user_pnumber?>"  placeholder="개인 전화번호" class="inph_3"></td></tr>
            <tr> <td colspan="3"><input type="text" name="user_hnumber"   value = "<?=$user_hnumber?>"  placeholder="집 전화번호" class="inph_3"></td></tr>
            </tr>
          
            <tr ><th rowspan="3">주소</th></tr>
            <tr><td  colspan="3"><input type="text" name="user_address_number"    id="user_address_number" placeholder="우편번호" class="form-control m-input inph_1"><button type="button" class=" btn_1"  onclick="execDaumPostcode()">우편번호 찾기</button></td> 
            <tr><td colspan="3"><input type="text" name="user_address"    id="user_address" placeholder="주소+상세주소" class="form-control m-input inph_3" cols="50"></td></tr>

            <tr><th>이메일</th>
            <td colspan="3"><input type="email"  class="inph_3"    name="user_email"  placeholder="이메일"></td>
            </tr>

            <th colspan="5"><p>학교</p></th>
            <tr>
            <th>상태</th>
            <td><select name="user_status" class="inph_1"   >
            <option>선택</option>
            <option>신입생</option>
            <option>재학생</option>
            <option>휴학생</option></select>
            </td>
            <th >입학구분</th><td><input type="text" name="user_admission"    placeholder="입학구분"  class="inph_1"></td>
            </tr>


            <tr><th rowspan="4">이수</th>
            <tr><th>이수학기</th><td><input type="number" name="user_semester" min="1" max="8"   class="inph_1" style="font-weight=bold"></td></tr>
            <tr><th>학년</th><td><input type="number" name="user_class" min="1" max="4"  class="inph_1" style="font-weight=bold"></td></tr>
            <tr><th>등급</th><td><input type="text" name="user_grade"   class="inph_1" placeholder="등급"></td></tr>
            </tr>

            <tr>
            <th>소속</th>
            <td colspan="3"><select name="user_affiliation"  class="inph_3">
            <option>소속선택</option>
            <option>신학대학</option>
            <option>문화콘텐츠대학</option>
            <option>테크노과학대학</option>
            <option>공과대학</option>
            <option>사회과학대학</option>
            <option>음악대학</option>
            <option>미술디자인대학</option>
            <option>사범대학</option>
            </select>
            </td>
            </tr>

             <tr><th  rowspan="4">전공</th>
             <tr> 
                 <td colspan="3"><select name="user_major"  class="inph_3">
                     <option>학과선택</option>
                     <option>융합컴퓨터미디어학과</option>
                     <option>컴퓨터공학과</option></select></td></tr>
             <tr>
                 <td colspan="3"><select name="user_affiliation"  class="inph_3">
                 <option>전공선택</option>
                 <option>융합컴퓨터</option>
                 <option>융합미디어</option>
                 <option>컴퓨터</option></select></td></tr>
             <tr><td colspan="3"><input type="text" class="inph_3" name="user_double_major"  placeholder="복수전공" ></td></tr>
             </tr>
          
             <tr>
             <th>지도교수</th>
             <td colspan="3"><input type="text" name="user_teacher"  class="inph_1" placeholder="지도교수" ></td>
             </tr>

             <tr><td colspan="4"><input type="submit" class="btn_2" value="수정"></td></tr> 
            </table>
          </form>
        </div>
          
          
  </body>
</html>
