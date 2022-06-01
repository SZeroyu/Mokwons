<!-- 시간표 조회 -->
<!DOCTYPE html>
<html lang='en' dir="ltr">
<head>
    <meta charset="utf-8" />
    <title>시간표 조회</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/schedule.css">
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

    <div class="schedule_a">
        <div class="schedule_a_1">
            <p>시간표</p>
        </duv>

        <div  class="schedule_a_2">
            <table>
                
            </table>
        </div>
    </div>
</div>


    
    


</body>
</html>