<?php 
    $conectar = new mysqli("localhost","root","","farmacia");
?>


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
        <link rel="stylesheet" href="css/ListadoFarmacia.css">
    </head>
    <body>
    
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">𝑁𝑜𝑣𝑎'𝑠 𝑃ℎ𝑎𝑟𝑚𝑎𝑐𝑦</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="Venta.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Cuenta</a></li>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login.php">Cuenta</a></li>
                               
        
                            </ul>
                        </li>
                    </ul>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">𝑁𝑜𝑣𝑎'𝑠 𝑃ℎ𝑎𝑟𝑚𝑎𝑐𝑦</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Te queremos bien</p>
                </div>
            </div>

       
        </header>
<body>
  
	<!--<button type="button" class="btn btn- primary rounded-pill" onclick="agregar()">Agregar Producto</button>-->
    
	<div id= "main-container">
		<table>
			<thead>
				<tr>
                    <th>Nombre del producto</th>
					<th>Código</th>
					<th>Descripción</th>
					<th>Cantidad de producto</th>
                    <th colspan="1">Acción</th>	
				</tr>
			</thead>
            <?php
                $query="SELECT * FROM productos_medicos";
                $resultado = $conectar->query($query);
                while($row= $resultado -> fetch_assoc()){
            ?>
                <tr>
                    <td><?php echo $row ['Nombre_Producto'];?></td>
                    <td><?php echo $row ['id_Codigo'];?></td>
                    <td><?php echo $row ['Descripcion'];?></td>
                    <td><?php echo $row ['Numero_Cantidad'];?></td>
                    <td> <button type="button">Añadir</button></td>
                    
            <?php
                }
            ?>
		</table>	
	</div>
</body>
</html>