<!--관리자페이지 회원 추가 registration.php-->
<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/search.css">
  </head>

  <body>
    <form action="search_res.php" method="post">

    <!--검색기능-->
    <select name="user_major"  class="search_minor" required="required">
            <option value="user_major">전공</option>
            <option>융합컴퓨터</option>
            <option>융합미디어</option>
            <option>컴퓨터</option>
            </select>

      <select name="user_status"  class="search_status">
            <option value="user_status">상태</option>
            <option>신입생</option>
            <option>재학생</option>
            <option>졸업생</option>
            <option>휴학생</option>
            <option>자퇴생</option>
            </select>


        <input type="text" name="search" class="search_ip" required="required" placeholder="Search">
        <button  class="search_btn"><img src="./img/돋보기.png" class="img_mg" width= 40px; height=90%;></button>

      
  </body>
</html>
