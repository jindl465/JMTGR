<?php
$id=$_POST['id'];
$pw=$_POST['pw'];
$pwc=$_POST['pwc'];
$name=$_POST['name'];
$email=$_POST['email'];

if($pw!=$pwc)
{
  echo "<script>alert(\"비밀번호가 틀립니다\");history.back();</script>";
  // echo "<a href=signUpPage.php>back page</a>";
  exit();
}
if($id==NULL || $pw==NULL || $name==NULL || $email==NULL)
{
  echo "<script>alert(\"빈 칸을 모두 채워주세요\");history.back();</script>";
  // echo "<a href=signUpPage.php>back page</a>";
  exit();
}

$mysqli=mysqli_connect("localhost", "root","1234","login");

$check="SELECT *from user_info WHERE userid='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1){
  echo "<script>alert(\"중복된 id입니다.\");history.back();</script>";
  exit();
}

$signup=mysqli_query($mysqli, "INSERT INTO user_info (userid,userpw,name,email)
VALUES ('$id','$pw','$name','$email')");
if($signup){
  echo "sign up success";
}

?>
