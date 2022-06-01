 <?php
  session_start();

  header('Content-Type: text/html; charset=UTF-8');
  $ip = file_get_contents('https://api.ipify.org');
  $db = new mysqli("localhost","root","","project");
  $db->set_charset("utf8");

  function mq($sql){
    global $db;
    return $db->query($sql);
  }

  ?>