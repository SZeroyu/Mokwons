<?php
 $con = mysqli_connect("localhost", "root", "", "project") or die("fail");


//학과 검색
 $search_major=$_POST['user_major'];

 $sql="select * from users where user_major like '%$search_major%'";
 $result = mysqli_query($con, $sql);
 $list='';
 
 while($row = mysqli_fetch_array($result)){
     $list = $list."{$row['user_number']}: <a href=\"search_data.php? user_number={$row['user_number']}\"";
 }
 mysqli_close($con);
 ?>