<!--app_class.php -> 수강신청 화면-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app_class_1.css">
    <title>Document</title>
</head>
  <body>
  <div><?php include "main2_2.php";?></div>
<div id="header_1" style="display: inline;"><ul><li>수강신청</li></ul></div>
    <?php
      session_start();
      if(isset($_SESSION['class_number'])){
        $class_number = $_SESSION['class_number'];
      }
      $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
      $sql = "select * from subject LIMIT 15;";
      $res = mysqli_query($con, $sql);

    ?>

      <form action="app_class_check.php" method="post">
      <table id="table_1" align=center  cellspacing="0">
    <tr bgcolor="#DFE6F7">
        <th>수강코드</th>
        <th>강의과목명</th>
        <th>분반</th>
        <th>담당교수</th>
        <th>학점</th>
        <th>시수</th>
        <th>강의 시간</th>
        <th>강의실</th>
        <th>강의 유형</th>
        <th>이수구분</th>
        <th>신청</th>
    </tr>
      <?php
    while($row = mysqli_fetch_array($res)){
      ?>
      <tr>
      <?php
      echo "
      <td>$row[class_code]</td>
      <td>$row[class_name]</td>
      <td>$row[class_division]</td>
      <td>$row[class_professor]</td>
      <td>$row[class_point]</td>
      <td>$row[class_time]</td>
      <td>
        $row[day1] $row[t1_start] ~ $row[t1_finish]";
        if(!$row['day2']){
          echo"
          <td>$row[class_room]</td>
          <td>$row[class_type]</td>
          <td>$row[class_complete]</td>";
        } else{
            echo"
          $row[day2] $row[t2_start] ~ $row[t2_finish]</td>
        <td>$row[class_room]</td>
        <td>$row[class_type]</td>
        <td>$row[class_complete]</td>";
      };
      ?>
      <td>
        <label class="check">
        <input type="checkbox">
        <span class="icon_1"></span>
    </label>
      </td>
    </tr>
    <?php
    }?>
</table>
<input type="submit" class="btn_2" value="신청"/>
    </form>
  </body>
</html>
