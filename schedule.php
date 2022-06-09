<!-- 시간표 조회 -->
<!DOCTYPE html>
<html lang='en' dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>시간표 조회</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/schedule_1.css">
</head>

<body>
  <div><?php include "main2_2.php";?></div>
  <div class="schedule_box">
  <?php
    if(isset($_SESSION['user_number'])){
      $user_number = $_SESSION['user_number'];
    }
    $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
    $sql = "select * from users where user_number='$user_number'; ";
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res);
    $user_class = $row["user_class"];

  ?>
    <!--검색기능-->
    <select name="catgo"  class="select_g" onChange="onChangeEvent();" required="required">
        <option  value = ""><?=$user_class?>학년</option>
        <option name="user_mainor" value="user_mainor">1학년</option>
        <option  name="user_class" value="user_class">2학년</option>
        <option  name="user_number" value="user_number">3학년</option>
        <option  name="user_name" value="user_name">4학년</option>
    </select>

    <select name="catgo"  class="select_s" onChange="onChangeEvent();" required="required">
        <option  value="0">학기</option>
        <option name="user_mainor" value="user_mainor">1학기</option>
        <option  name="user_class" value="user_class">2학기</option>
    </select>


      <table id="schedule_a_1" align=center  cellspacing="0">
        <tr bgcolor="#c8d6f7"><th colspan="11" >시간표</th></tr>
        <tr id=schedule_a_2>
          <th> </th>
          <th>월</th>
          <th>화</th>
          <th>수</th>
          <th>목</th>
          <th>금</th></tr>

            <tr id=schedule_a_2>
              <th>1교시</th>
              <td rowspan="2">캡스톤디자인2</td>
              <td></br></td>
              <td rowspan="2">멀티미디어통신</td>
              <td>멀티미디어통신</td>
            <td rowspan="3">정보보호응용</td></tr>
            <tr id=schedule_a_2>
              <th>2교시</th>

              <td></br></td>
              <td rowspan="2">캡스톤디자인2</td>

            </tr>
            <tr id=schedule_a_2>
              <th>3교시</th>
              <td></br></td>
              <td></br></td>
              <td></br></td>


            </tr>
            <tr id=schedule_a_2>
              <th>4교시</th>
              <td></br></td>
              <td></br></td>
              <td></br></td>
              <td></br></td>
              <td></br></td>
            </tr>
            <tr id=schedule_a_2>
              <th>5교시</th>
              <td></br></td>
              <td rowspan="2">컴퓨터종합실습2</td>
              <td></br></td>
              <td></br></td>
              <td rowspan="4">컴퓨터그래픽스</td>
            </tr>
            <tr id=schedule_a_2>
              <th>6교시</th>
              <td></br></td>

              <td rowspan="2">컴퓨터종합실습2</td>
              <td></br></td>

            </tr>
            <tr id=schedule_a_2>
              <th>7교시</th>
              <td></br></td>
              <td></br></td>

              <td></br></td>
            </tr>
            <tr id=schedule_a_2>
              <th>8교시</th>
              <td></br></td>
              <td></br></td>
              <td></br></td>
              <td></br></td>
            </tr>
            <tr id=schedule_a_2>
              <th>8교시</th>
              <td></br></td>
              <td></br></td>
              <td></br></td>
              <td></br></td>
              <td></br></td>
            </tr>
            <tr id=schedule_a_2>
              <th>9교시</th>
              <td></br></td>
              <td></br></td>
              <td></br></td>
              <td></br></td>
              <td></br></td>
            </tr>
      </table>
    </div>


</body>
</html>
