<?php 
  //require("PHPMailer_5.2.4/class.phpmailer.php");
  include 'connection_db.php';

  $connection = db_connect();

  //$mail = new PHPMailer;

   //$mail->SMTPDebug = 2;                               // Enable verbose debug output
  /*$mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'itcrprueba001@gmail.com';                 // SMTP username
  $mail->Password = 'holamundo';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->addAddress('itcrprueba001@gmail.com');               // Name is optional
  //$mail->setFrom('vsaborio4@gmail.com', 'Mailer');

  */if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Post variables
    $nombreContacto = $_POST['nombre'];
    $apellidoContacto = $_POST['apellido'];
    $telefonoContacto = $_POST['telefono'];
    $emailContacto = $_POST['email'];
    $provinciaContacto = $_POST['provincia'];
    $lugarContacto = $_POST['lugar'];
    $fechaContacto = date('Y-m-d', strtotime($_POST['fecha']));
    $personasContacto = $_POST['personas'];
    $servicioContacto = $_POST['servicio'];
    $extraContacto = $_POST['extra'];

    // Query to insert data
    $sql = "INSERT INTO `cotizar`(`nombre_contacto`, `apellido_contacto`, `telefono_contacto`, `email_contacto`, `id_provincia`, `lugar_contacto`, 
    `fecha_contacto`, `personas_contacto`, `servicio_contacto`, `extra_contacto`) VALUES ('$nombreContacto','$apellidoContacto',
    '$telefonoContacto','$emailContacto','$provinciaContacto','$lugarContacto','$fechaContacto','$personasContacto','$servicioContacto',
    '$extraContacto')";

    // Insert the data if the query its ok
    if ($connection->query($sql) === TRUE) {
        /*$mail->Subject = $nombreContacto;
        $mail->Body    = 'Nueva cotización realizada por: '.$nombreContacto.'  '.$apellidoContacto;

        if(!$mail->send()) {
          echo '<div class="warning">Error al enviar el mensaje</div>';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {*/
          echo "<div class='success'>La cotización fue enviada correctamente</div>";
        //}
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }

  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_cotizaciones.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
</head>
<body>
  <header>
    <div id="logo">
      <h1><img src="logo.png"></h1>
    </div>
    <div id="header-wrapper">
      <div id="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li class="current_page_item"><a href="#">Cotizaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br>

  <section>    
    <form class="formulario" action="" method="post">
      <fieldset>
        <legend>Cotizaciones</legend>
        Nombre del contacto: <br><input type="text" name="nombre" required> <br>
        Apellido del contacto: <br><input type="text" name="apellido" required> <br>
        Teléfono: <br><input type="number" name="telefono" required> <br>
        Email: <br><input type="text" name="email"> <br>
        <label class="dir">Dirección:</label>
        <div class="direccion">
          Provincia:
          <select  name="provincia">
            <?php 
            $sql = "SELECT * FROM provincia";
            $result = mysqli_query($connection,$sql);
            while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {                                                 
               echo "<option value='".$row['id_provincia']."'>".$row['nombre_provincia']."</option>";
            }
          ?>
          </select>
          <br>
          <br>
          <textarea name="lugar" id="styled1" placeholder="Ingrese la dirección del lugar..." required></textarea>
        </div>
        <br>
        Fecha del evento: <input type="date" name="fecha" required> <br><br>
        Número de personas que asistirá al evento: <input type="number" name="personas"> <br><br>
        Tipo de servicio: 
        <input type="radio" name="servicio" value="buffet" checked> Buffet
        <input type="radio" name="servicio" value="plato"> Plato Servido
        <input type="radio" name="servicio" value="pasabocas"> Pasabocas
        <input type="radio" name="servicio" value="parallevar"> Para llevar<br><br><br>
        <label class="ser">Servicio especial o extra:</label>
        <textarea name="extra" id="styled2"></textarea>
        <br><br>
        <input class="btn" type="submit" value="Realizar Cotización">
      </fieldset>
    </form>
  </section>

  <footer>
    Pida la tarjeta VIP de cliente frecuente y disfrute de sus beneficios.
  </footer>
 <script src="js/textarea-style.js"></script>
</body>
</html>