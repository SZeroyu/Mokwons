<!--app_class.php -> 수강신청 화면-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_app_class.css">
    <title>Document</title>
</head>
  <body>
  <div><?php include "admin_main_2.php";?></div>
  <div class="app_box">
  <div class="ec_box">
  <button type="submit" id="Send" class="excel" onclick="location.href='app_excel_down.php'"><img src="./img/엑셀.png" width="45px" height="45px"></button>
  <button type="submit" id="Send" class="btn" onclick="location.href=''"  value="추가">추가</button>
  <button type="submit" id="Send" class="btn1" onclick="location.href=''" value="삭제">삭제</button>
  
</div>
    <?php
     
      if(isset($_SESSION['class_number'])){
        $class_number = $_SESSION['class_number'];
      }
      $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
      $sql = "select * from subject LIMIT 15;";
      $res = mysqli_query($con, $sql);
    ?>

      <form action="app_class_check.php" method="post">
      <div class="table_box"> 
         <!--수강신청-->
      
        <table id="app_table" align=center  cellspacing="0"> 
        <tr bgcolor="#DFE6F7"><th colspan="11">개설과목</th></tr>    
          <!--테이블 제목-->
          <tr bgcolor="#DFE6F7">
            <th>체크</th>
            <th>수강코드</th>
            <th>강의 과목명</th>
            <th>분반</th>
            <th>담당교수</th>
            <th>학점</th>
            <th>시수</th>
            <th>강의 시간</th>
            <th>강의실</th>
            <th>강의 유형</th>
            <th>이수구분</th>
           
           <?php
           while($row = mysqli_fetch_array($res)){
             ?>

          <tr>
              <td>check</td> <!--강의 정보 출력-->
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
              if(!$row['day2']){ /*강의시간 출력*/
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

          </tr>
        <?php
      }
      ?>
      </table>
    </div>
    </form>

    </div>
  </body>
</html>