<!--app_class.php -> 수강신청 화면-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app_class_ex.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    
    <title>Document</title>
</head>
  <body>
  <div><?php include "header_3.php";?></div>
  <div class="main_page01">
    <!-- 페이지 순 -->
    <div class="page_info"><p>수업<span> &gt </span>강의정보<span> &gt </span><span class="page">시간표조회<span></p></div>
    <!-- 사이드 메뉴 -->
    <div class="side_menu">
        <div class="navigation">
        <ul>
            <li class="list ">
            <a href="#" onclick="location.href='h_수업.php'">
                <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
                <span class="title">수업</span>
            </a>
            </li>
            <li class="page_list"><p>강의정보</p></li>
            <li class="list ">
            <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="medkit-outline"></ion-icon></span>
                <span class="title">공결관리</span>
            </a>
            </li>
            <li class="list ">
            <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="star-half-outline"></ion-icon></span>
                <span class="title">강의평가</span>
            </a>
            </li>
            <li class="list " >
            <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="time-outline"></ion-icon></span>
                <span class="title">시간표조회</span>
            </a>
            </li>
            <li class="list active" >
            <a href="#" onclick="location.href=''">
                <span class="icon"><ion-icon name="checkbox-outline"></ion-icon></span>
                <span class="title">수강신청</span>
            </a>
            </li>
            <li class="list">
            <a href="#" onclick="location.href='login_out.php'">
                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Sign Out</span>
            </a>
            </li>
        </ul>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="./js/script.js"></script>
    </div>

    <div class="app_box">
        <!-- 수강신청 -->
        <div class="table_box">
        <?php
        if(isset($_SESSION['class_number'])){
            $class_number = $_SESSION['class_number'];
        }
        $con = mysqli_connect("localhost", "root", "", "project") or die("fail");
        $sql = "select * from subject LIMIT 15;";
        $res = mysqli_query($con, $sql);
        ?> 
        <div class="select_subject">
            <input type="radio" id="subject_name" name="subject"> 
            <label for="subject_name" >과목명</label>
            <input type="radio" id="essential"  name="subject">
            <label for="essential">교양필수</label>
            <input type="radio" id="main point" name="subject">
            <label for="main point" >교양핵심</label>
            <input type="radio" id="Select" name="subject">
            <label for="Select" >교양선택</label>

            <label for="search"></label>
            <input type="text"  placeholder="검색">
            <span><ion-icon name="search-outline"></ion-icon></span>
        </div>  
        <form action="app_class_check.php" method="post"> 

        <table class="app_table" cellspacing="0"> 
            <tr><th colspan="11">개설과목</th></tr>    
            <!--테이블 제목-->
            <tr>
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
                <th>신청</th></tr>
            
            <?php
            while($row = mysqli_fetch_array($res)){
                ?>

            <tr> <!--강의 정보 출력-->
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
                <td><input type="submit" name="app[]" class="app_btn" value="신청"></td>
            </tr>
            <?php
        }
        ?>
        </table>
        <ul class="pageing"  id="pagingul">
            <li><i class="fi fi-sr-heart"></i></li>
        </ul>
        </div>
        <div class="app_info">
            <h4>관심과목 안내</h4>
            <ol>
                <li>관심관목 등록은 수강신청 1주일 전부터 가능합니다.</li>
                <li>관심과목이란 수강신청 전에 나의 관심과목을 미리 목록에 등록해 두었다가 수강 신청시 과목 검색을 거치지 않고 바로 수강 신청을 할 수 있도록 하는 방법입니다.</li>
                <li>검색조건(과목명, 학과별, 교양필수, 교양핵심, 교양선택, 교직과목)을 통해 관심 과목을 미리 등록하시기 바랍니다.</li>
                <li>관심과목으로 등록했다고 해도 수강신청이 된상태는 아니니, 특별히 주의하시기 바라며 반드시 수강신청 기간에 수강신청을 하시기 바랍니다.</li>
                <li>수강신청 오픈 전에는 담당교수 및 강의 시간 등이 변경 될 수 있습니다. 따라서 관심과목으로 등록할 시점의 내용과 수강신청 시점의 내용이 달라질 수 있으므로 수강 신청시 반드시 내용을 확인하시기 바랍니다.</li>
                <li>20과목까지만 등록할 수 있습니다.</li>
            </ol>
        </div>
    </div>
    
</div>
  </body>
</html>