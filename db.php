<?php
session_start();
#header("Content-Type: text/html; charset=utf-8"); // utf-8인코딩

$db_host = "localhost";
$db_user = "caujmtgr";
$db_passwd = "caucse18";
$db_name = "caujmtgr";
$connect = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

mysqli_set_charset($connect,'utf8');

/*
if (mysqli_connect_errno($connect)) {
  echo "데이터베이스 연결 실패: " . mysqli_connect_error();
} else {
  echo "데이터베이스 연결 성공";
}
*/

?>
