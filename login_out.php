
<?php
session_start();
unset($_SESSION["userID"]);
echo"<script> location.href='login.php';</script>";
?>