<?php
header('Content-Type: text/html; charset=UTF-8');
  include 'db.php';
   session_start();
    $prev = $_POST['go-back']."#review";
    $uid = $_SESSION['id'];
    $rid = $_POST['restaurant-id'];
    $star = $_POST['star-input'];
    $comment = $_POST['comments'];
    $day = date("Y-m-d");
    $dupli_sql = "SELECT * FROM user_review WHERE uid='$uid' and rid='$rid'";

    $num_rows = mysqli_num_rows($connect->query( $dupli_sql));
if(!$uid){
     echo "<script>alert('로그인이 필요한 기능입니다!'); window.location.href = 'login.php';</script>";
}
else if($star <1 || $star >5){
    echo "<script>alert('별점을 입력해주세요!'); window.location.href = '$prev';</script>";
}
else if(  $num_rows>0){
    echo "<script>alert('이미 리뷰를 등록했습니다!'); window.location.href = '$prev'; </script>";
}else{

    $sql = "INSERT INTO user_review (uid, rid, star, comment, day) VALUES ('$uid', '$rid', $star, '$comment', '$day')";
    $insert_result = $connect->query($sql);
    if($insert_result == TRUE){
        echo "<script>alert('소중한 리뷰 감사합니다!'); window.location.href = '$prev';</script>";

    }else{
        echo $connect->error;
        echo "<script>alert('리뷰 등록에 오류가 있었습니다!'); window.location.href = '$prev';</script>";
    }
}
 ?>
