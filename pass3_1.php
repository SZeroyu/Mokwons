<!--휴학원-->

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1">
    <title>목원대학교 종합정보시스템</title>


    <link rel="stylesheet" href="./css/info_pass.css">
</head>

  <body> 
     <!-- 팝업 될 레이어--> 
     <div class="label_content">
        <input type="checkbox" id="info">
        <label for="info">작성하기</label>
        <div class="content">
            <h2>휴학 신청서</h2>
            <tabel class="info_table" cellspacing="10">
                <div>
                <tr>
                    <th>학번/학년</th>
                    <td><input type="text" id="text" value="학번"></td>
                    <td><input type="text" id="text" value="학년"></td>

                    <th>성명</th>
                    <td colspan="2"><input type="text" id="text" value="성명"></td>
                </tr></div>
                
                <div>
                <tr>
                    <th>소속</th>
                    <td colspan="2"><input type="text" id="text" value="소속"></td>

                    <th>전공</th>
                    <td colspan="2"><input type="text" id="text" value="전공"></td>
                </tr></div>

                <div>
                <tr>
                    <th>전화번호</th>
                    <td colspan="2"><input type="text" id="text" value="전화번호"></td>


                    <th>이수학기</th>
                    <td colspan="2"><input type="text" id="text" value="이수하기"></td>
                </tr></div>

                <div>
                <tr>
                    <th>휴학기간</th>
                    <td colspan="2"><input type="text" id="text" value="휴학기간"></td>

                    <th>휴학구분</th>
                    <td colspan="2"><input type="text" id="text" value="휴학구분"></td>
                </tr></div>

                <div>
                <tr>
                    <th>복학예정학기</th>
                    <td colspan="2"><input type="text" id="text" value="복학예정학기"></td>

                    <th>생년월일</th>
                    <td colspan="2"><input type="text" id="text" value="생년월일"></td>
                </tr></div>

                <div>
                <tr>
                    <th>병역사항</th>
                    <td colspan="2"><input type="text" id="text" value="병역사항"></td>

                    <th>국적</th>
                    <td colspan="2"><input type="text" id="text" value="국적"></td>
                </tr></div>

                <div>
                <tr>
                    <th>휴학사유</th>
                    <td colspan="4"><input type="text" id="text" value="휴학사유"></td>
                </tr></div>

                <input type="submit" value="전송하기">
            </tabel>
           <label for="info">취소</label>
        </div>
     </div>
     
     

</body> 
</html>
<from action="pass.php" metdod="POST">