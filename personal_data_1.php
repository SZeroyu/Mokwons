<!--personal_data.php-> 개인정보변경-->
<!--personal_data_1.php-> 졸업생 개인정보변경 디자인 다시 생각해보기-->
<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main1.css">
    <link rel="stylesheet" href="./css/personal_data_3.css">
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
  <div><?php include "main_2.php";?></div> 
  <div id="header_1" style="display: inline; color: white;"><ul><li>개인정보변경(졸업생)</li></ul></div>
    <div>
    <form action="personal_data_check.php" method="post">
      <table id="table_1" align=center cellspacing="10">
      <div>
          <tr>
            <th bgcolor="#DFE6F7">학번/사번</th>
            <td><input id="nb" onchange='printName()'  type="text" name="user_number" value=""  class="inph_1" placeholder="학번/사번"></td>
          </tr>
          </div>
      <div>
          <tr>
            <th bgcolor="#DFE6F7">이름</th>
            <td><input type="text" name="user_name" value=""  class="inph_1" placeholder="이름"></td>
          </tr>
          </div>
          <div>
            <tr>
            <th bgcolor="#DFE6F7">생년월일</th>
            <td><input type="text" name="user_birthday" value="" placeholder="ex) 20001127" class="inph_1"></td>
  </tr>
  </div>
          <div>
          <tr ><th rowspan="3" bgcolor="#DFE6F7">주소</th></tr>
          <tr><td  colspan="3"><input type="text" name="user_address_number" value="" id="user_address_number" placeholder="우편번호" class="form-control m-input inph_1"><button type="button" class=" btn_1"  onclick="execDaumPostcode()">우편번호 찾기</button></td> 
          <tr><td colspan="3"><input type="text" name="user_address" id="user_address" value=""placeholder="주소+상세주소" class="form-control m-input inph_2" cols="50"></td></tr>
          </div>

          <div>
          <tr><th  rowspan="3" bgcolor="#DFE6F7">전화번호</th>
          <tr> <td colspan="3"><input type="text" name="user_pnumber" value="" placeholder="개인 전화번호" class="inph_2"></td></tr>
          <tr> <td colspan="3"><input type="text" name="user_hnumber" value="" placeholder="집 전화번호" class="inph_2"></td></tr>
          </tr>
          </div>

          <div>
          <tr>
            <th bgcolor="#DFE6F7">이메일</th>
            <td colspan="3"><input type="email"  class="inph_2" name="user_email" value="" placeholder="이메일"></td>
          </tr>
          </div>

          <div>
          <tr><th  rowspan="3" bgcolor="#DFE6F7">은행</th>
          <tr> <td colspan="3"><select type="text" class="inph_2" name="user_bank" value="" placeholder="은행" >
          <option>은행선택</option>
            <option>농협</option>
            <option>신한</option>
            <option>카카오뱅크</option>
            <option>우리은행</option>
            <option>KB국민은행</option>
            <option>IKB기업은행</option>
            <option>KEB하나은행</option>
            <option>새마을금고</option>
            <option>SC제일은행</option>
          </select>
          </td></tr>
          <tr><td colspan="3"><input type="text" class="inph_2" name="user_bank_number" value="" placeholder="계좌번호" ></td></tr>
          </tr>
         </div>
         <div>
          <tr>
          <td colspan="4"><input type="submit" class="btn_2" value="저장"></td>
          </tr>
        </div>
      </table>
      </form>
      
    </div>
  </body>
</html>
