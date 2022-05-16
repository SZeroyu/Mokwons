<!--관리자페이지 회원 조회 및 수정 searh_data.php-->

<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/search_data.css">
    <link rel="stylesheet" href="./css/popup.css">
    <title>목원대학교 종합정보시스템</title>
  </head>
  <script type="text/javascript">
    function openPop(){
    var popup = window.open('admin_change.php', '수정 팝업', 'width=780px,height=900px, scrollbars=yes');}
    </script>
  <body>
  <div><?php include "admin_main.php";?></div> 


<!--검색 기능-->
    <div class="search">
      <div class="search_b"><?php include "search.php";?></div>

    <!--정보 조회-->
    <div class="search_box">
    <?php
      session_start();
      if(isset($_SESSION['user_number'])){
        $class_number = $_SESSION['user_number'];
      }
      $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
      $sql = "select * from users LIMIT 10;";
      $res = mysqli_query($con, $sql);
    ?>


     <div class="table_box">
      <table id="table_2" align=center  cellspacing="0"> 
      <tr bgcolor="#DFE6F7">
        <th>학과</th>
        <th>전공</th>
        <th>힉년</th>
        <th>학번</th>
        <th>이름</th>
        <th>상태</th>
        <th>수정</th>
      </tr>
      <?php
    while($row = mysqli_fetch_array($res)){
      ?>
      <tr>
      <?php
      echo "
      <td>$row[user_major]</td>
      <td>$row[user_minor]</td>
      <td>$row[user_class]</td>
      <td>$row[user_number]</td>
      <td>$row[user_name]</td>
      <td>$row[user_status]</td>"
?>
<td><input type="button" onclick="openPop();" class="popup_btn" value=" 수정 "></td>
    </tr>
    <?php
    }?>
</table>
</div>
</div>
    </div>
  </body>
</html>
