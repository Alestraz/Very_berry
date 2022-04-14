<?php
      require "app/database/db.php";
      

?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS + links-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <title>Very Berry</title>
</head>
<body>


<?php include("app/include/header.php"); ?>
  <!-- Main Text -->
  <div class="container main-text">
    <h2><a href="buy.php">Купить клубнику от 199 руб/кг</a></h2>
  </div>

  <!-- Carousel Start -->
  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/straw1.jpg" class="d-block w-100" alt="сочная клубника">
          <div class="carousel-caption d-none d-md-block">
            <h5>Свежайшая клубника из Краснодарского Края, выращенная в экологически чистом районе<br>
              Мы любим своё дело и работаем на качество. Только лучшая клубника!</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/straw2.jpg" class="d-block w-100" alt="наши фермы">
          <div class="carousel-caption d-none d-md-block">
            <h5>Порадуйте себя и своих близких!<br>
              Мы выращиваем только лучшие сорта ягод без использования химикатов.</h5>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/straw3.jpg" class="d-block w-100" alt="как мы выращиваем клубнику">
          <div class="carousel-caption d-none d-md-block">
            <h5>Хотите узнать больше о нашей ферме?<br>
              Приезжайте сами к нам на экскурсию или посетите нас не выходя из дома с помощью уникального бесплатного онлайн тура!</h5>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- Advantages Start -->

  <div class="container">
    <div class="advantages row text-center">
      <div class="col-3 advantages-block">
        <i class="fab fa-raspberry-pi fa-3x"></i>
        <h3> Свежая клубника, только что с грядки</h3>
      </div>
      <div class="col-3 advantages-block">
        <i class="fas fa-ruble-sign fa-3x"></i>
        <h3> У нас лучшие цены: от 199 руб/кг</h3>
      </div>
      <div class="col-3 advantages-block">
        <i class="fas fa-truck fa-3x"></i>
        <h3> Доставляем в любую точку России</h3>
      </div>
      <div class="col-3 advantages-block">
        <i class="fas fa-box fa-3x"></i>
        <h3> Современная и технологичная упаковка </h3>
      </div>
    </div>
  </div>

  <!-- Advantages End -->

  <!-- Products Start -->

  <div class="container products">
    <div class="row product">
      <p>
      <img src="images/straw4.jpg" alt="1 сорт">
      <span>1 Сорт</span><br><br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
      <a href="buy.php">Купить 1 сорт</a>
      </p>
    </div>
    <div class="row product">
      <p>
        <img src="images/straw5.jpg" alt="2 сорт" style="float: right; margin-left: 15px;">
        <span>2 Сорт</span><br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
        <a href="buy.php">Купить 2 сорт</a>
        </p>
    </div>
    <div class="row product">
      <p>
        <img src="images/straw6.jpg" alt="3 сорт">
        <span>3 Сорт</span><br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
        <a href="buy.php">Купить 3 сорт</a>
        </p>
    </div>
  </div>

  <!-- Products End -->
  
<?php include("app/include/footer.php") ?>