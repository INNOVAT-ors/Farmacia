<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>𝑁𝑜𝑣𝑎'𝑠 𝑃ℎ𝑎𝑟𝑚𝑎𝑐𝑦</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/LoginFarmacia.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/boton.js"></script>
    </head>
    
    <body style="background-image: url('https://fondosmil.com/fondo/65295.png');">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">𝑁𝑜𝑣𝑎'𝑠 𝑃ℎ𝑎𝑟𝑚𝑎𝑐𝑦</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Adiministrador</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="loginAdministrador.php">Cuenta de Administador</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="login-box">
      <img src="img/logo.jpg" class="avatar" alt="">
      <h1>Login Here</h1>
      <form action="validar.php" method="post">
        <!-- USERNAME INPUT -->
        <label>Username:</label>
        <input type="text" placeholder="Enter Username" name="Usuario">
        <!-- PASSWORD INPUT -->
        <label>Password:</label>
        <input type="password" minlength="10" maxlength="10" placeholder="Enter Password(10 characters)" name="Contraseña">
        <center><a><input type="submit" value="Login"></a></center><br>


        
      </form>
    </div>
  </body>
  <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">𝑁𝑜𝑣𝑎'𝑠 𝑃ℎ𝑎𝑟𝑚𝑎𝑐𝑦</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Te queremos bien</p>
                </div>
            </div>

   </header>

</html>