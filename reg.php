<?php 
      include "app/controllers/users.php";
      include "app/include/header.php"; 
?>

  <!-- Form Start -->
  <section class="vh-100 reg-form" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Добро пожаловать!</p>
                  <!-- Form Itself -->
                  <form class="mx-1 mx-md-4" method="post" action="reg.php">
                    <div class="form-outline flex-fill mb-0 err">
                      <p style="color:red;font-style:italic;"><?php echo $errMsg ?></p> <!-- Mistake Message -->
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form-name" class="form-control" name="user_name" value="<?php echo $name ?>"/>
                        <label class="form-label" for="form-name">Ваше имя</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form-email" class="form-control" name="email" value="<?php echo $email ?>"/>
                        <label class="form-label" for="form-email">Ваш Email</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form-password" class="form-control" name="password"/>
                        <label class="form-label" for="form-password">Пароль</label>
                      </div>
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button class="btn btn-danger btn-lg" type="submit" name="button-reg">Зарегистрироваться</button>
                    </div>
  
                  </form>
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="images/straw3.jpg" class="img-fluid" alt="наша ферма">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Form End -->
  
  <?php include("app/include/footer.php") ?>