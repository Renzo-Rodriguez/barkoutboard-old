<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  .carousel-inner.item img {
    object-fit: cover;
  }

  .carousel {
    z-index: 0;
  }
</style>

<body>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->

      <div class="carousel-inner">
        <div class="item active">
          <img src="./images/ModelUN.PNG" alt="Los Angeles" style="border-radius: 10px;">
          <div class="carousel-caption">
            <h3>Modul UN - PACMUN</h3>
          </div>
        </div>
        <div class="item">
          <img src="./images/badminton.jpg" alt="Chicago" style="border-radius: 10px;">
          <div class="carousel-caption">
            <h3>Santa Teresa Badminton CCS Finalists</h3>
          </div>
        </div>

        <div class="item">
          <img src="./images/marching-band.webp" alt="New York" style="border-radius: 10px;">
          <div class="carousel-caption">
            <h3>STHS Marching Band and Color Guard</h3>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->

      <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="border-radius: 10px;">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next" style="border-radius: 10px;">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>