//<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> </head>
<?php
//session_start();
header("Content-Type: text/html; charset=UTF-8");
include 'db.php';

$id=$_POST['input_id'];
$pw=$_POST['input_pw'];
$pwc=$_POST['input_pwc'];
$name=$_POST['input_name'];
$email=$_POST['input_email'];

if($pw!=$pwc)
{
  echo "<script>alert(\"비밀번호가 일치하지 않습니다.\");history.back();</script>";
  // echo "<a href=signUpPage.php>back page</a>";
  exit();
}

if($id==NULL || $pw==NULL || $name==NULL || $email==NULL)
{
  echo "<script>alert(\"빈 칸을 모두 채워주세요\");history.back();</script>";
  // echo "<a href=signUpPage.php>back page</a>";
  exit();
}
/*
$db_host = "localhost";
$db_user = "caujmtgr";
$db_passwd = "caucse18";
$db_name = "caujmtgr";
$connect = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

mysqli_set_charset($connect,'utf8');

if (mysqli_connect_errno($connect)) {
echo "데이터베이스 연결 실패: " . mysqli_connect_error();
} else {
echo "데이터베이스 연결 성공";
}
*/

$check="SELECT *from user WHERE id='$id'";
$result=$connect->query($check);
if($result->num_rows==1){
  echo "<script>alert(\"중복된 id입니다.\");history.back();</script>";
  exit();
}

//$name2 = iconv("EUC-KR", "UTF-8", $name);

$signup=mysqli_query($connect, "INSERT INTO user (id,name,email,passwd)
VALUES ('$id','$name','$email','$pw')");
if($signup){
    echo "<script>alert(\"가입 완료! 로그인 해주세요.\");location.replace('./index.php');</script>";
  //echo "sign up success";
}

?>
