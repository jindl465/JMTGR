<?php
session_start();
  // 네이버 로그인 접근토큰 요청 예제
  $client_id = "UXeRqTQqpdiede3qKdvU";
  $redirectURI = urlencode("http://caujmtgr.dothome.co.kr/naver_callback.php");
  $state = "RAMDOM_STATE";
  $apiURL = "https://nid.naver.com/oauth2.0/authorize?response_type=code&client_id=".$client_id."&redirect_uri=".$redirectURI."&state=".$state;
?>

