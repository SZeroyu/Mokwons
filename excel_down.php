<?php
header( "Content-type: application/vnd.ms-excel" );   
header( "Content-type: application/vnd.ms-excel; charset=utf-8");  
header( "Content-Disposition: attachment; filename = 학생정보.xls" ); //제목
header( "Content-Description: PHP5 Generated Data" );   

$mysqli = new mysqli("localhost", "root", "", "project") or die("fail");  
$EXCEL_FILE = "
<table border='1'>
    <tr>
       <td>학과</td>
       <td>전공</td>
       <td>학년</td>
       <td>학번</td>
       <td>이름</td>
    </tr>

";

$qry = "SELECT * FROM `users`  ";
$res = $mysqli->query($qry);

// DB 에 저장된 데이터를 테이블 형태로 저장
while ($row = $res->fetch_object()) {
$EXCEL_FILE .= "

    <tr>
       <td>".$row->user_major."</td>
       <td>".$row->user_minor."</td>
       <td>".$row->user_class."</td>
       <td>".$row->user_number."</td>
       <td>".$row->user_name."</td>

    </tr>

";

}

$EXCEL_FILE .= "</table>";



// 만든 테이블을 출력해줘야 만들어진 엑셀파일에 데이터가 나타납니다.



echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>";

echo $EXCEL_FILE;

?>


