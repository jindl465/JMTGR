<?php
  include('db.php');
 ?>

<div class="review">
  <div class="col-md-6 col-md-offset-3 form-container">
      <h2>리뷰</h2>
      <p>
          ---------------------------------------------------------------------------------
      </p>
      <form role="form" method="post" id="reused_form">
        <div class="row">
          <div class="rate">
          </div>
          <div class="submitbutton">
            <button type="submit"> 완료 </button>
          </div>

        </div>
        <div class="row">
            <div class="col-sm-12 form-group">
                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="리뷰를 입력하세요" maxlength="6000" rows="7"></textarea>
            </div>
        </div>

        <?php
          $connect=mysqli_connect($db_host,$db_user,$db_passwd,$db_name)
          $sql = "INSERT INTO user_review VALUES('$a1_d', '$a2_d', '$a3_d', '$a4_d','$a5_d')";
          if(!$connect) die ('Not connected: '.mysqli_connect_error);
          mysqli_set_charset($connect,'utf8');

          ?>
      </form>
  </div>
</div>
