<?php 
  require_once("app/include/baseurl.php"); 
  // Get the amount of items in the shopping cart, this will be displayed in the header
  $num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
      
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

<!-- Header -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <header class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <h1><a href="<?php echo BASE_URL; ?>">Very Berry</a></h1>
        </div>
        <nav class="col-12 col-md-8">
          <ul>
            <li><a href="./buy.php">Купить</a></li>
            <li><a href="#contacts">Контакты</a></li>
            <li><a href="cart.php">Корзинка&nbsp;<i class="fas fa-shopping-basket"></i><span><?=$num_items_in_cart?></span></a></li>
            <li> <!-- echo user_name on the website -->
              <?php if (isset($_SESSION['id'])): ?>
                <a href="#">
                  <?php echo $_SESSION['user_name']; ?>
                </a>
                  <ul>
                      <?php if ($_SESSION['admin']): ?>
                        <li><a href="#">Админ</a></li>
                      <?php endif; ?>
                    <li><a href="<?php echo BASE_URL . "logout.php"; ?>">Выход</a></li>
                  </ul>
                <?php else: ?>
                  <a href="<?php echo BASE_URL . "log.php"; ?>">Войти</a>
                  <ul> 
                    <li><a href="<?php echo BASE_URL . "reg.php"; ?>">Регистрация</a></li>
                  </ul>
                <?php endif; ?>
            </li>
          </ul>
          
        </nav>
      </div>
    </div>
  </header>