<!--관리자페이지 회원 추가 registration.php-->
<!DOCTYPE html>
<html lang='en' dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/search_1.css">
  </head>

  <body>
    
    <button type="submit" id="Send" class="excel" onclick="location.href='excel_down.php'"><img src="./img/엑셀.png" width="45px" height="45px"></button>
    <form action="search_res.php" method="get">
    <div class="search_box_1">
    <!--검색기능
    <select name="search_option"  class="search_minor" onChange="onChangeEvent();" required="required">
            <?php/*
                $option_list = array('all'=> '전체', 'user_mainor'=> '전공', 'user_class'=> '학년', 'user_number'=> '학번', 'user_name'=> '이름');
                while(list($option, $value) = each($option_list)){
                  echo "<option value=\"$option\">$value</option>";
                }*/
            ?>  
            </select>-->

    <select class="search_minor" name="catgo">
      <option value="user_major">전공</option>
      <option value="user_class">학년</option>
      <option value="user_number">학번</option>
    </select>

   
    
        <input type="text" id="search_text" value="" name="search" class="search_ip" required="required" placeholder="Search">
        <button type="submit" class="search_btn" ><img src="./img/돋보기.png" class="img_mg" width= 40px; height=90%;></button>
        

</div>
  </body>
</html>
 