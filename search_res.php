<!--검색 옵션-->
 <?php
   session_start();
   $mysqli = new mysqli("localhost", "root", "", "project") or die("fail");
   //DB로부터 값을 가져온다     
   $sql = "select * from users";
   $res = $mysqli->query($sql);
   $num_result = $res->num_rows;

       $search_option = $_POST['search_option'];
       $keyword = $_POST['keyword'];
       
       if(mysqli_connect_errno())
       {
           echo "DB connect error";
       }

       if(strlen($keyword) > 0) {
           switch ($search_option) {
           case "all": 
               $sql = "SELECT *FROM project WHERE  ( LIKE '%$keyword%') OR (memo LIKE '%$keyword%') ORDER BY num DESC";
             break;
           case "user_minor":
               $sql = "SELECT *FROM users WHERE  user_minor LIKE '%$keyword%' ORDER BY num DESC";
              break;
           case "user_class":
               $sql = "SELECT *FROM users WHERE  user_class LIKE '%$keyword%' ORDER BY num DESC";
              break;         
           case "user_number":
                $sql = "SELECT *FROM users WHERE  user_number LIKE '%$keyword%' ORDER BY num DESC";
               break;
           case "user_name":
                $sql = "SELECT *FROM users WHERE  user_name LIKE '%$keyword%' ORDER BY num DESC";
               break;
          }
          $res = $mysqli->query($sql);
           $num_result = $res->num_rows;
          
       }
   ?>
   <!--관리자페이지 회원 조회 및 수정 searh_data.php-->

<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <metavalue="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/search_data_1.css">
    <link rel="stylesheet" href="./css/popup.css">
    <title>목원대학교 종합정보시스템</title>
  </head>
  <script type="text/javascript">
    function openPop(){
    var popup = window.open('admin_change.php', '수정 팝업', 'width=850px,height=1000px, scrollbars=yes');}
    </script>
  <body>
  <div><?php include "admin_main.php";?></div> 


<!--검색 기능-->
    <div class="search">
    
      <div class="search_b"><?php include "search.php";?></div>

       <!--학생 정보 출력 테이블 -->
      <table id="table_2" align=center  cellspacing="0"> 
      <tr bgcolor="#DFE6F7">
        <th value="user_major">학과</th>
        <th value="user_minor">전공</th>
        <th value="user_class">힉년</th>
        <th value="user_number">학번</th>
        <th value="user_name">이름</th>
        <th value="user_status">상태</th>
        <th>수정</th>
      </tr>
      <?php
      for($i=0; $i<$num_result; $i++){
        $row=$res->fetch_assoc();

      }
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
</div>
</div>

  </body>
</html>

