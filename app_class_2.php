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
  <?php
      if(isset($_SESSION['user_number'])){
        $user_number = $_SESSION['user_number'];
      }
      $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
      $sql = "select * from subject_data where user_number='$user_number';";
      $res = mysqli_query($con, $sql);
    ?>
    <form action="app_class_cancel.php" method="post">
  <table id="app_table_2" align=center  cellspacing="0"> 
                <!--테이블 제목-->
            <tr bgcolor="#DFE6F7"><th colspan="2">수강신청 내역</th></tr>
            <tr bgcolor="#DFE6F7">
            <th>수강코드</th>
            <th>취소</th></tr>
           
           <?php
           while($row = mysqli_fetch_array($res)){
             ?>

          <tr> <!--수강한 과목 정보 출력-->
            <?php
            echo "
            <td>$row[class_code]</td>"
              ?>
            <td><input type="submit" name="cancel" class="app_btn" value="취소"></td>
          </tr>
        <?php
      }
      ?>
    </table> 
  </body>
</html>