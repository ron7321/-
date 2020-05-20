<?php
$mysqli = mysqli_connect("127.0.0.1", "root", "", "magazin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="aaaa.css" rel="stylesheet">
	<title>а</title>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="add.php">СЮДАААААААА</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">неработающий поиск</button>
          </form>
      </div>
    </nav>
  </header>
<main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/image/1слайд.jpg" alt="" class="w-100">
        <div class="container">
          <div class="carousel-caption text-left"></div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/image/2слайд.jpg" alt="" class="w-100">
        <div class="container">
          <div class="carousel-caption"></div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/image/3слайд.jpg" alt="" class="w-100">
        <div class="container">
          <div class="carousel-caption text-right"></div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  

  <h1></h1>
  <!-- карточки -->
  <div class="container mt-4">
    <div class="row">
      <?php
      $result = $mysqli->query("SELECT * FROM `tovars`");
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img class="card-img-top" src="/image/<?= $row['file'] ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?= $row['description'] ?></h5>
              <p class="card-text"><?= $row[''] ?></p>
              <p style='font-size:20px ; font-weight:100; font-family: Geneva, Arial, Helvetica, sans-serif;' class="card-text"><?= $row['price'] ?></p>
              <p class="card-text"><?= $row['category'] ?></p>

              <a href="#" class="btn btn-primary btn-lg btn-block">в корзину</a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>      
    </div>
  </div>
  
  <!-- карточки -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>© 2017-2019 Company, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
  </footer>
</main>
	 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>