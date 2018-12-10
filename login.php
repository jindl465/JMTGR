<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CAU - JMT : 중앙대 맛집 사이트</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <?php
      include('navbar.html');
    ?>

    <!-- Login -->
    <section class="bg-light" id="login">
      <form method="post" action="login_check.php">
        <div class="contentId">
          <label for="input_id">ID </label>
          <input type="text" name="input_id"/>
        </div>
        <div class="contentPw">
          <label for="input_pw">PW </label>
          <input type="password" name="input_pw"/>
        </div>

        <div class="button">
          <button type="submit"> login </button>
        </div>

      </form>
      <?php echo "<a href=signUpPage.php>SignUp</a>"; ?>
      <p></p>
      <?php include 'naver_login.php'; ?>
      <a href="<?php echo $apiURL ?>"><img height="50" src="../img/naverLginBtn/succeed_green.PNG"/></a>

    </section>

    <?php
      include('footer.html');
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
