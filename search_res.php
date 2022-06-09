<!--검색 옵션-->
 <?php
    include $_SERVER['DOCUMENT_ROOT']."/db.php";
   ?>
   <!--관리자페이지 회원 조회 및 수정 searh_data.php-->

<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <metavalue="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/search_data_1.css">
    <link rel="stylesheet" href="./css/popup.css">
    <user_major>목원대학교 종합정보시스템</user_major>
  </head>
  <script type="text/javascript">
    function openPop(){
    var popup = window.open('admin_change.php', '수정 팝업', 'width=850px,height=1000px, scrollbars=yes');}
    </script>
  <body>
  <div><?php include "admin_main.php";?></div> 


<!--검색 기능-->
    <div class="search">
    <?php
    /* 검색 변수 */
    $catagory = $_GET['catgo'];
    $search_con = $_GET['search'];
    ?>
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
          $sql2 = mq("select * from users where $catagory like '%$search_con%' order by user_number desc");
          while($users = $sql2->fetch_array()){
           
          $user_major=$users["user_major"]; 
            if(strlen($user_major)>30)
              { 
                $user_major=str_replace(users["user_major"],mb_substr(users["user_major"],0,30,"utf-8")."...",users["user_major"]);
              }
            $sql3 = mq("select * from users where con_num='".users['user_number']."'");
            $rep_count = mysqli_num_rows($sql3);
        ?>
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

  </body>
</html>