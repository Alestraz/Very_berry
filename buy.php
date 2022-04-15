<?php
    include "app/database/db.php";
    include "app/include/header.php";
    
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
    <title>Buy strawberries</title>
</head>
<body>

<!-- Products Start -->

<div class="container products">
    <div class="row product" style="margin-top: 50px;">
      <p>
      <img src="images/straw4.jpg" alt="1 сорт">
      <span>1 Сорт</span><br><br>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
      <span class="price"> 370 руб/кг </span>
      </p> 
      <form action="cart.php"  method="post">
            <input type="number" name="quantity" placeholder="Кол-во кг" style="width:105px;" value="1" required>
            <input type="hidden" name="prod_id" value="1">
            <input type="submit" value="Купить 1 сорт">
        </form>
    </div>
    <div class="row product">
      <p>
        <img src="images/straw5.jpg" alt="2 сорт" style="float: right; margin-left: 15px;">
        <span>2 Сорт</span><br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
        <span class="price"> 270 руб/кг </span>
        </p>
        <form action="cart.php"  method="post">
            <input type="number" name="quantity" placeholder="Кол-во кг" style="width:105px;" value="1" required>
            <input type="hidden" name="prod_id" value="2">
            <input type="submit" value="Купить 2 сорт">
        </form>        
    </div>
    <div class="row product">
      <p>
        <img src="images/straw6.jpg" alt="3 сорт">
        <span>3 Сорт</span><br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
        <span class="price"> 199 руб/кг </span>
        </p>
        <form action="cart.php"  method="post">
            <input type="number" name="quantity" placeholder="Кол-во кг" style="width:105px;" value="1" required>
            <input type="hidden" name="prod_id" value="3">
            <input type="submit" value="Купить 3 сорт">
        </form>
    </div>
    <div class="row product">
      <p>
        <img src="images/straw7.jpg" alt="земляника" style="float: right; margin-left: 15px;">
        <span>Земляника</span><br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
        <span class="price"> 199 руб/кг </span> 
        </p>
        <form action="cart.php"  method="post">
            <input type="number" name="quantity"placeholder="Кол-во кг" style="width:105px;" value="1" required>
            <input type="hidden" name="prod_id" value="4">
            <input type="submit" value="Купить Землянику">
        </form>
    </div>
    <div class="row product">
      <p>
        <img src="images/straw8.jpg" alt="Земляника Дикая">
        <span>Земляника Дикая</span><br><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet.<br><br>
        <span class="price"> 299 руб/кг </span>
        </p>
        <form action="cart.php" method="post">
            <input type="number" name="quantity" placeholder="Кол-во кг" style="width:105px;" value="1" required>
            <input type="hidden" name="prod_id" value="5">
            <input type="submit" value="Купить Дикую Землянику">
        </form>
    </div>
  </div>

<!-- Products End -->
  
<?php include "app/include/footer.php"; ?>

</body>
</html>