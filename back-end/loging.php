<?php
$usuario=$_POST['Usuario'];
$contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['Usuario']=$usuario;

$conexion=msqli_connect("localhost","root","","loging");

$consulta="SELECT*FROM datos where datos='$usuario' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.php");

}else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="malo">ERROR</h1>
    <?php

} 
mysqli_free_result($resultado);
mysqli_close($conexion);
