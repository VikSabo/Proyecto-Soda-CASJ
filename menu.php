<?php
  include 'connection_db.php';
  // Connect to the database
  $connection = db_connect();
  date_default_timezone_set('America/Costa_Rica');
  $date = date("Y-m-d");
?>
<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
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
      $query = "SELECT p.imagen,p.descripcion FROM menu m INNER JOIN plato p ON m.id_plato=p.id_plato WHERE m.date='$date'";
      $res = mysqli_query($connection, $query);

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
    <div id="board-top">&nbsp;</div>
        <div id="board">
          <div class="board-in">
            <h3 align="center">Precios del día</h3>
            <ol>
              <?php
                $query = "SELECT p.nombre_plato,p.precio FROM menu m INNER JOIN plato p ON m.id_plato=p.id_plato WHERE m.date='$date'";
                $res = mysqli_query($connection, $query);
                while($row = mysqli_fetch_array($res)){
                ?>
                  <li id="fuentePrecios"><?php echo $row['nombre_plato'];?>: <?php echo $row['precio'];?></li>
                <?php
                  };
              ?>
            </ol> 
          </div>
          <div class="divider">&nbsp;</div>
          <div class="board-in">
            <h3 align="center">Información de Contacto</h3>
          </div>
          <div class="paper">
            <div class="paper-in">
              <contacto>
                  Soda TEC/M&M Soluciones <br />
                  <small style="font-size: 12px;">E-mail: mymsoluciones1&#64;</small>
                  <small style="font-size: 12px;">gmail.com</small><br />
                  <small>Tel: 8585-0549</small><br />
              </contacto> 
            </div>
          </div>
        </div>
        <div id="board-bottom">&nbsp;</div>
      </div>
  </aside>
 
</body>
</html>