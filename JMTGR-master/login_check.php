<?php
session_start();
$id=$_POST['id'];
$pw=$_POST['pw'];
$mysqli=mysqli_connect("localhost","root", "1234", "login");

$check="SELECT * FROM user_info WHERE userid='$id'";
$result=$mysqli->query($check);
if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['userpw']==$pw){
    $_SESSION['userid']=$id;
    if(isset($_SESSION['userid'])){
      header('Location: ./main.php');
    }
    else{
      echo "<script>alert(\"세션 저장 실패.\");history.back();</script>";
    }
  }
  else{
    echo "<script>alert(\"wrong id or pw.\");history.back();</script>";
  }
}
else{
  echo "<script>alert(\"wrong id or pw.\");history.back();</script>";
}

?>
