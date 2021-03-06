<?php
  header("Content-Type: text/html;charset=utf-8");
  include 'connection_db.php';
  // Connect to the database
  $connection = db_connect();

?>
<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_servicios.css">
  <script src="js/funciones.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
</head>
<body>
  <header>
    <div id="header-wrapper">
      <div id="logo">
        <h1><img src="logo.png" width="180" height="119"></h1>
      </div>
      <div id="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li class="current_page_item"><a href="servicios.php">Servicios</a></li>
            <li><a href="cotizaciones.php">Cotizaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br>
  
    <h1 id="fuente" align="center">Servicios Complementarios</h1><br>
    <ol>
      <?php
        $res = mysqli_query($connection, "SELECT * FROM servicios");
        while($row = mysqli_fetch_array($res)){
      ?>
      <li><a href="#"><?php echo  $row['nombre_servicio'];?></a>
      <?php 
        }
      ?>
    </ol>
    <?php

    $res = mysqli_query($connection, "SELECT image_servicio,descripcion FROM servicios");
    while($row = mysqli_fetch_array($res)){
  ?>
    <div class="floating-box" align="center">
      <img src="<?php echo $row['image_servicio'];?>" width="300" height="200">
    </div> 
    <?php
      }
    ?>
</body>
</html>