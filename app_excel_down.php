<?php
header( "Content-type: application/vnd.ms-excel" );   
header( "Content-type: application/vnd.ms-excel; charset=utf-8");  
header( "Content-Disposition: attachment; filename = 개섷과목.xls" ); //제목을 바꾸자면 title.xls 를바꾸면됨
header( "Content-Description: PHP5 Generated Data" );   

$mysqli = new mysqli("localhost", "root", "", "project") or die("fail");  
$EXCEL_FILE = "

<table border='1'>

    <tr>
       <td>수강코드</td>
       <td>강의과목명</td>
       <td>분반</td>
       <td>담당교수</td>
       <td>학점</td>
       <td>시수</td>
       <td>강의시간</td>
       <td>강의 유형</td>
       <td>이수구분</td>
    </tr>

";

$qry = "SELECT * FROM `subject`  ";
$res = $mysqli->query($qry);



// DB 에 저장된 데이터를 테이블 형태로 저장합니다.
while ($row = $res->fetch_object()) {
$EXCEL_FILE .= "

    <tr>
       <td>".$row->class_code."</td>
       <td>".$row->class_name."</td>
       <td>".$row->class_division."</td>
       <td>".$row->class_professor."</td>
       <td>".$row->class_point."</td>
       <td>".$row->class_time."</td>
       <td>".$row->day1."</td>
       <td>".$row->class_room."</td>
       <td>".$row->class_type."</td>
       <td>".$row->class_complete."</td>


    </tr>

";

}



$EXCEL_FILE .= "</table>";



// 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.



echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>


