<?php
  $dean = $_POST["dean"];
  $graduate_project = $_POST["graduate_project"];
  $advisor = $_POST["advisor"];
  $project_name = $_POST["project_name"];
  $project_con = $_POST["project_con"];
  $project_info = $_POST["project_info"];

  $con = mysqli_connect("localhost", "root", "", "project") or die("fail");

  $sql = "update graduate_plan set
          dean = '$dean', 
          graduate_project = '$graduate_project' , 
          advisor = '$advisor',
          project_name = '$project_name', 
          project_con = '$project_con', 
          project_info = '$project_info' ;";


          mysqli_query($con, $sql);
          mysqli_close($con);

  echo "<script>alert('저장완료');
  location.href='./h_졸업논문계획서.php'
  </script>";
  
 ?>
