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

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">음식 리스트</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" href="list.php?type=한식">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/korean.jpg" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>한식</h4>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" href="list.php?type=일식">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/japan.jpg" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>일식</h4>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" href="list.php?type=중식">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/china.jpg" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>중식</h4>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" href="list.php?type=치킨">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/chicken.jpg" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>치킨</h4>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" href="list.php?type=피자">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/pizza.jpg" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>피자</h4>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" href="list.php?type=기타">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/cafe.jpg" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>기타</h4>
              </div>
            </div>
          </div>
        </div>
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
