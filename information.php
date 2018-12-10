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
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <?php
    include('navbar.html');
    include 'db.php';

    $name = $_GET['name']; //넘겨받은 음식점 데이터
    //echo $name;
    $sql="SELECT * FROM restaurant WHERE name='$name'";
    $element=$connect->query($sql);
    $restaurant = $element->fetch_array();
    $rid = $restaurant['id'];
    $location = $restaurant['location'];
    $phone = $restaurant['phone'];
    $openTime = $restaurant['openTime'];
    $closeTime = $restaurant['closeTime'];
    $menu = $restaurant['mainmenu'];
  ?>

    <section class="info">
    <!-- Page Content -->
    <div class="container">
      <!-- Related Projects Row -->
      <div class="row">

        <?php
          $cur_pic_query = "SELECT link FROM restaurant_picture WHERE r_id= '$rid'";
          $cur_pic_link = $connect->query($cur_pic_query);

          if($cur_pic_link)
          {
            while($cur_pic = $cur_pic_link->fetch_array())
            {
              echo
              "
              <div class='col-md-3 col-sm-6 mb-4'>
                <a href='$cur_pic[0]'>
                  <img class='img-fluid' src='$cur_pic[0]' alt=''>
                </a>
              </div>
              ";
            }
          }

          ?>

      </div>
      <!-- /.row -->

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-4">
          <h3 class="my-3">음식점 정보</h3>
          <ul>
            <li>이름 : <?php echo $name; ?></li>
              <li>위치 : <?php echo $location; ?></li>
              <li>전화번호 : <?php echo $phone; ?></li>
              <li>영업시간 : <?php echo $openTime;?> - <?php echo $closeTime;?></li>
              <li>메뉴 : <?php echo $menu; ?></li>
          </ul>
        </div>


        <div class="col-md-8">
          <img class="img-fluid" src="http://placehold.it/500x300" alt="">
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>

    <?php
      include('footer.html');
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
