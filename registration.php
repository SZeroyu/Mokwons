<!--registration.php-->
<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main1.css">
    <link rel="stylesheet" href="./css/registration.css">
    <title>회원가입 페이지</title>
  </head>
  <body>
  <div id="header_1" style="display: inline;"><ul><li>회원가입페이지(1)</li></ul></div>
    <div>
    <div><?php include "admin_main.php";?></div> 
      <form action="registration_check.php" method="post">
      <table id="table_1" align=center  cellspacing="10">
          <tr>
            <th bgcolor="#DFE6F7">학번/사번</th>
            <td ><input  type="text" name="user_number" value=""  class="inph_1" placeholder="학번/사번"></td>
            <th bgcolor="#DFE6F7">비밀번호</th>
            <td colspan="3"><input type="text" name="user_password" value="" placeholder="비밀번호" class="inph_1"></td></tr>
            
            <tr>
            <th bgcolor="#DFE6F7">상태</th>
            <td><select name="user_status" value=""  class="inph_1">
            <option>선택</option>
            <option>신입생</option>
            <option>재학생</option>
            <option>휴학생</option></select>
            </td>
            <th bgcolor="#DFE6F7" >입학구분</th><td><input type="text" name="user_admission" value="" placeholder="입학구분"  class="inph_1"></td>
          </tr>


          <tr><th rowspan="4" bgcolor="#DFE6F7">이수</th>
             <tr><th bgcolor="#DFE6F7">이수학기</th><td><input type="number" name="user_semester" min="1" max="8"   class="inph_1" style="font-weight=bold"></td></tr>
            <tr><th bgcolor="#DFE6F7">학년</th><td><input type="number" name="user_class" min="1" max="4"  class="inph_1" style="font-weight=bold"></td></tr>
            <tr><th bgcolor="#DFE6F7">등급</th><td><input type="text" name="user_grade" value=""  class="inph_1" placeholder="등급"></td></tr>
            </tr>
          <tr>
            <th bgcolor="#DFE6F7">소속</th>
            <td colspan="3"><select name="user_affiliation"  class="inph_2">
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
          <tr><th  rowspan="4" bgcolor="#DFE6F7">전공</th>
          <tr> <td colspan="3"><input type="text" class="inph_2" name="user_bank" value="" placeholder="전공" ></td></tr>
          <tr><td colspan="3"><input type="text" class="inph_2" name="user_bank_number" value="" placeholder="부전공" ></td></tr>
          <tr><td colspan="3"><input type="text" class="inph_2" name="user_bank_number" value="" placeholder="복수전공" ></td></tr>
          </tr>
          <tr>
            <th bgcolor="#DFE6F7">지도교수</th>
            <td colspan="3"><input type="text" name="user_teacher" value="" class="inph_1" placeholder="지도교수" ></td>
          </tr>

          <tr>
          <td colspan="3"><input type="submit" class="btn_2" value="저장"></td>
</tr> 
</table>
      </form>
    </div>
  </body>
</html>
