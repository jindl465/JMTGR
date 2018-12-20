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

    <style>
    .star-input>.input,
    .star-input>.input>label:hover,
    .star-input>.input>input:focus+label,
    .star-input>.input>input:checked+label{display: inline-block;vertical-align:middle;background:url('img/grade_img.png')no-repeat;}
    .star-input{display:inline-block; white-space:nowrap;width:225px;height:40px;padding:25px;line-height:30px;}
    .star-input>.input{display:inline-block;width:150px;background-size:150px;height:28px;white-space:nowrap;overflow:hidden;position: relative;}
    .star-input>.input>input{position:absolute;width:1px;height:1px;opacity:0;}
    star-input>.input.focus{outline:1px dotted #ddd;}
    .star-input>.input>label{width:30px;height:0;padding:28px 0 0 0;overflow: hidden;float:left;cursor: pointer;position: absolute;top: 0;left: 0;}
    .star-input>.input>label:hover,
    .star-input>.input>input:focus+label,
    .star-input>.input>input:checked+label{background-size: 150px;background-position: 0 bottom;}
    .star-input>.input>label:hover~label{background-image: none;}
    .star-input>.input>label[for="p1"]{width:30px;z-index:5;}
    .star-input>.input>label[for="p2"]{width:60px;z-index:4;}
    .star-input>.input>label[for="p3"]{width:90px;z-index:3;}
    .star-input>.input>label[for="p4"]{width:120px;z-index:2;}
    .star-input>.input>label[for="p5"]{width:150px;z-index:1;}
    .star-input>output{display:inline-block;width:60px; font-size:18px;text-align:right; vertical-align:middle;}
    #review>.container {
      width: 100%;
      height: 70%;
      margin: 40px auto;
    }
    #review>.outer {
      display: table;
      width: 100%;
      height: 100%;
    }
    #review>.inner {
      display: table-cell;
      vertical-align: middle;
      text-align: center;
    }
    #review>.centered {
      position: relative;
      display: inline-block;

      width: 100%;
      padding: 1em;
    }
    </style>

    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=l1b8mkrqqq"></script>

  </head>

  <body id="page-top">

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

        <div id="map" style="width:50%;height:400px;"></div>
        <script>

        var map = new naver.maps.Map('map', {
          center: new naver.maps.LatLng(37.5043268,126.955546),
          zoom: 12
        });

        var marker = new naver.maps.Marker({
          position: new naver.maps.LatLng(37.5043268,126.955546),
          map: map
        });
        // var mapOptions = {
        //   center: new naver.maps.LatLng(37.5043268,126.955546),
        //    zoom: 11
        //  };
        //
        //
        //  // 마커로 사용할 이미지 정의
        //  	var marker_icon = new nhn.api.map.Icon('http://superkts.com/img/marker_arrive.png', new nhn.api.map.Size(32, 46), new nhn.api.map.Size(16, 46));
        //
        //  	// 마커 정의
        //  	var marker = new nhn.api.map.Marker(marker_icon, {point:new nhn.api.map.LatLng(37.5788434, 126.9770207)});
        //
        //  	// 지도에 마커 추가하기
        //  	nmap.addOverlay(marker);

         //var map = new naver.maps.Map('map', mapOptions);
       </script>

      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </section>


<section id="review">
  <div class="container">
    <div class="outer">
      <div class="inner">
        <div class="centered">
        <div class="review" >
            <div class="col-md-6 col-md-offset-3 form-container">
              <h2>리뷰</h2>
              <p>
                ---------------------------------------------------------------------------------
              </p>
              <form role="form" method="post" id="reused_form" action="review.php">
                <input type='hidden' name='restaurant-id' value=<?=$rid?>>
                <input type='hidden' name='go-back' value=<?=$_SERVER['REQUEST_URI'];?>>
                <div class="row">
                  <span class="star-input">
            	       <span class="input">
                	 <input type="radio" name="star-input" value="1" id="p1">
                	 <label for="p1">1</label>
                	 <input type="radio" name="star-input" value="2" id="p2">
                	 <label for="p2">2</label>
                	 <input type="radio" name="star-input" value="3" id="p3">
                	 <label for="p3">3</label>
                	 <input type="radio" name="star-input" value="4" id="p4">
                	 <label for="p4">4</label>
                	 <input type="radio" name="star-input" value="5" id="p5">
                	 <label for="p5">5</label>
              	      </span>
              	   <output for="star-input"><b>0</b>점</output>

                  </span>
                </div>
                <div class="row">
                  <div class="col-sm-12 form-group">
                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="리뷰를 입력하세요" maxlength="15000" rows="7"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="submitbutton">
                    <button type="submit"> 완료 </button>
                  </div>
                </div>
              </form>

              <div class="row">
                <div class="mainreview">
                  <?php
                  $table = "SELECT * FROM user_review";
                  $result = $connect->query($table);

                  echo "<table id=\"T\"> 리뷰내용 <tr> </tr>";
                      while($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>".$row['uid']."</td>";
                        echo "<td>".$row['star']."</td>";
                        echo "<td>".$row['day']."</td>";
                        echo "<td>".$row['comment']."</td>";
                        echo "</tr>";
                      }
                    echo "</table>";
                   ?>
                </div>
              </div>
            </div>
          </div>
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
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/star.js"></script>

  </body>

</html>
