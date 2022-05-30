<?php
$User=$_POST['Usuario'];
$Password=$_POST['Contraseña'];

//conectar a la base de datos
$conexion=mysqli_connect("localhost", "root", "", "farmacia");
$consulta="SELECT * FROM login_gn where Usuario='$User' and Contraseña='$Password'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas>0) {
   header ("location:Venta.php");
}
else {
   echo "";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
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
    </head>
    <body style="background-image: url('https://fondosmil.com/fondo/65295.png');">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">𝑁𝑜𝑣𝑎'𝑠 𝑃ℎ𝑎𝑟𝑚𝑎𝑐𝑦</a>
             
            </div>
        </nav>
   </body>
   <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">𝑁𝑜𝑣𝑎'𝑠 𝑃ℎ𝑎𝑟𝑚𝑎𝑐𝑦</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Te queremos bien</p>
                </div>
            </div>
   </header>
   <center><img src="img/Error.jpg"
     </center>
     <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
         <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="login.php")>Regresar</a></div>
     </div>
</html>



