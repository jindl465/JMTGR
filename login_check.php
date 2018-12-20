<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> </head>
<?php
session_start();


$db_host = "localhost";
$db_user = "caujmtgr";
$db_passwd = "caucse18";
$db_name = "caujmtgr";
$connect = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

if(!$connect) die ('Not connected: '.mysqli_connect_error);
mysqli_set_charset($connect,'utf8');

//$mysqli=mysqli_connect("localhost","caujmtgr", "caucse18", "caujmtgr");
$id=$_POST['input_id'];
$pw=$_POST['input_pw'];

$check="SELECT * FROM user WHERE id='$id'";
$result=$connect->query($check);
if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['passwd']==$pw){
    $_SESSION['id']=$id;

    if(isset($_SESSION['id'])){
      $_SESSION['name']=$row['name'];
      echo "<script>alert('".$row['name']."님 로그인 성공');location.replace('./index.php');</script>";
    }
    else{
      echo "<script>alert(\"세션 저장 실패.\");history.back();</script>";
    }
  }
  else{
    echo "<script>alert(\"아이디나 비밀번호가 틀립니다.\");history.back();</script>";
  }
}
else{
  echo "<script>alert(\"아이디나 비밀번호가 틀립니다.\");history.back();</script>";
}

?>
