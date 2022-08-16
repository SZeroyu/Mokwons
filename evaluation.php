<!-- 강의평가입력 -->
<!DOCTYPE html>
<html lang='en' dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>강의평가입력</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/personal_data.css">
</head>

<body>
  <div><?php include "header_3.php";?></div>
    <main class="evaluation">
      <div class="evaluation">
        <form action="evaluation_action.php" method="post">
      <div>
        <table id="somi_1">
            <tr style="height: 10px;" align=center bordercolor="gray"  cellspacing="10";>
            <th bgcolor="#DFE6F7">순번</th>
            <th bgcolor="#DFE6F7">수강코드</th>
            <th bgcolor="#DFE6F7">분반</th>
            <th bgcolor="#DFE6F7">과목명</th>
            <th bgcolor="#DFE6F7">담당교수</th>
            <th bgcolor="#DFE6F7">강의시간/강의실</th>
            <th bgcolor="#DFE6F7">강의평가유형</th>
            <th bgcolor="#DFE6F7">완료여부</th>
            </tr>
              <tr style="height: 90px;"><td style="width: 80%; height: 90px;" colspan="8"><br></td></tr>
            </table>
</div>
<div>
<table id="somi_2" align=center  cellspacing="10";>
            <th bgcolor="#DFE6F7">연도</th>
            <td><select namm="user_status" value="" class="inph_4">
              <option>2021</option>
              <option>2020</option>
              <option>2019</option>
              <option>2018</option>
              <option>2017</option>
              <option>2016</option>
              <option>2015</option>
              <option>2014</option>
              <option>2013</option>
              <option>2012</option>
              <option>2011</option>
            </select></td>
            <th bgcolor="#DFE6F7">학기</th>
            <td><select namm="user_status" value="" class="inph_4">
              <option>1학기</option>
              <option>2학기</option>
            </select></td>
            <th bgcolor="#DFE6F7">구분</th>
            <td><select namm="user_status" value="" class="inph_4">
              <option>중간고사</option>
              <option>기말고사</option>
            </select></td>
          </table>
</div>
          </form>
      </div>


      </div>
    </main>
</body>