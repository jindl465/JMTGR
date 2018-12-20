<?php
header('Content-Type: text/html; charset=UTF-8');
  // 네이버 로그인 콜백 예제
  $client_id = "UXeRqTQqpdiede3qKdvU";
  $client_secret = "1Fq2sTAsC5";
  $code = $_GET["code"];;
  $state = $_GET["state"];;
  $redirectURI = urlencode("http://caujmtgr.dothome.co.kr/index.php");
  $url = "https://nid.naver.com/oauth2.0/token?grant_type=authorization_code&client_id=".$client_id."&client_secret=".$client_secret."&redirect_uri=".$redirectURI."&code=".$code."&state=".$state;
  $is_post = false;
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, $is_post);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $headers = array();
  $response = curl_exec ($ch);
  $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
  echo "status_code:".$status_code."
";
  curl_close ($ch);
  if($status_code == 200) {
    $responseArr = json_decode($response, true);
    $_SESSION['naver_access_token'] = $responseArr['access_token'];
    $_SESSION['naver_refresh_token'] = $responseArr['refresh_token'];


// 토큰값으로 네이버 회원정보 가져오기
  $me_headers = array(
    'Content-Type: application/json',
    sprintf('Authorization: Bearer %s', $responseArr['access_token'])
  );
  $me_is_post = false;
  $me_ch = curl_init();
  curl_setopt($me_ch, CURLOPT_URL, "https://openapi.naver.com/v1/nid/me");
  curl_setopt($me_ch, CURLOPT_POST, $me_is_post);
  curl_setopt($me_ch, CURLOPT_HTTPHEADER, $me_headers);
  curl_setopt($me_ch, CURLOPT_RETURNTRANSFER, true);
  $me_response = curl_exec ($me_ch);
  $me_status_code = curl_getinfo($me_ch, CURLINFO_HTTP_CODE);
  curl_close ($me_ch);
 
  $me_responseArr = json_decode($me_response, true);

if ($me_responseArr['response']['id']) {
  session_start();
  $_SESSION['id'] = "naver_".$me_responseArr['response']['id'];
  $_SESSION['name'] = $me_responseArr['response']['name'];
  $_SESSION['email'] = $me_responseArr['response']['email'];
  $statement = $me_responseArr['response']['name']." 님 로그인 성공";
  echo "<script>alert('$statement');</script>";
  echo "<script>window.location.href='index.php';</script>";
}else{
  echo "정보 얻어오기 실패.";
}
  } else {
    echo "Error 내용:".$response;
  }
?>