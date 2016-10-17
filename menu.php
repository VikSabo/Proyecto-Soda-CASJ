<?php
  include 'connection_db.php';
  // Connect to the database
  $connection = db_connect();
?>
<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_menu.css">
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
            <li class="current_page_item" ><a href="menu.php">Menu</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="cotizaciones.php">Cotizaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="#">Nosotros</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br>

  <section>
    <h1 id="fuente" align="center">Nuestros platillos del día</h1><br>
    <?php

      $res = mysqli_query($connection, "SELECT * FROM plato");
      while($row = mysqli_fetch_array($res)){
    ?>
      <div class="img">
        <img src="<?php echo $row['imagen']; ?>" width="600" height="400">
        <div class="desc"><?php echo $row['descripcion'];?></div>
      </div> 
      <?php
        }
    ?>
  </section>

  <aside>
    <div id="sidebar">
      <h3 id="fuenteH3">
        Nuestros precios son los siguientes: <br>
      </h3>
      <ol>
        <?php
            $res = mysqli_query($connection, "SELECT * FROM plato");
            while($row = mysqli_fetch_array($res)){
          ?>
            <li id="fuentePrecios"><?php echo $row['nombre_plato'];?>: <?php echo $row['precio'];?></li>
          <?php
            };
        ?>
        </ol> 
    </div>
  </aside>
 
</body>
</html>