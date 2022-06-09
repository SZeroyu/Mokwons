<!--관리자페이지 회원 조회 및 수정 searh_data.php-->

<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <metavalue="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/search_data_2.css">
    <link rel="stylesheet" href="./css/popup.css">
    <title>목원대학교 종합정보시스템</title>
  </head>
  <script type="text/javascript">
    function openPop(){
    var popup = window.open('admin_change.php', '수정 팝업', 'width=850px,height=1000px, scrollbars=yes');
  }

  function setText(){
    popup.document.getElementById("cInput").value=document.getElementById("user_major").value;
  }
    </script>
  <body>
  <div><?php include "admin_main.php";?></div> 


<!--검색 기능-->
    <div class="search">
    
      <div class="search_b"><?php include "search.php";?></div>

    <?php
      session_start();
      if(isset($_SESSION['user_number'])){
        $class_number = $_SESSION['user_number'];
      }
      $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
      /*학생 정보 가져오기*/
      $sql = "select * from users LIMIT 10;";
      $res = mysqli_query($con, $sql);?>

     <div class="table_box">
       <!--학생 정보 출력 테이블 -->
      <table id="table_2" align=center  cellspacing="0"> 
      <tr bgcolor="#DFE6F7">
        <th id="user_major" value="user_major">학과</th>
        <th value="user_minor">전공</th>
        <th value="user_class">힉년</th>
        <th value="user_number">학번</th>
        <th value="user_name">이름</th>
        <th value="user_status">상태</th>
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
