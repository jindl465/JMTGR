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

    <?php
      include('navbar.html');
      include 'db.php';
      //include 'pictureDB.php';
      $end_page=2;
      $limit=5;
      $start=$_GET['page']*$limit;
      $type=$_GET['type'];
      $sql="SELECT *FROM restaurant WHERE type='$type' LIMIT $start,$limit";
      $element=$connect->query($sql);
    ?>

    <!-- Page Content -->
    <section class="container" id="list">
      <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4"><?echo $type ?> 맛집 리스트
      </h1>



      <?php //db에서 음식점 row 하나씩 불러오기
      while($cur_list = $element->fetch_array()) // cur_list : 음식점정보 db row
      {
        $rid = $cur_list['id'];
        $rname = $cur_list['name'];
        $rlocation = $cur_list['location'];
        $rmenu = $cur_list['mainmenu'];

        $cur_pic_query = "SELECT link FROM restaurant_picture WHERE r_id= '$rid'";
        $cur_pic_link = $connect->query($cur_pic_query);

        if($cur_pic_link)
        {
          $cur_pic = $cur_pic_link->fetch_array();
        }


        echo
        "
        <div class='row'>
          <div class='col-md-5'>
                <a href='#';>
                  <img class='img-fluid rounded mb-3 mb-md-0' src='$cur_pic[0]' alt=''>
                </a>
          </div>
          <div class = 'col-md-5'>
          <h2> $rname </h2>
          <h5> $rmenu </h5>
          <p> $rlocation </p>
          <form action='information.php' method='get'>
          <input type='hidden' name='name' value='$rname'>
          <input type='submit' value=' 더보기 ' class ='btn btn-primary'>
          </form>
        </div>
      </div>

      <hr>
        ";
      }
?>

      <!-- Pagination -->
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="?type=<? echo $type ?>&page=0" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="?type=<? echo $type ?>&page=0">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="?type=<? echo $type ?>&page=1">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="?type=<? echo $type ?>&page=2">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="?type=<? echo $type ?>&page=<? echo $end_page ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
    </div>
    </section>
    <!-- /.container -->


    <?php
      include('footer.html');
    ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
