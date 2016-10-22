<?php
  require("PHPMailer_5.2.4/class.phpmailer.php");
  include 'connection_db.php';
  // Connect to the database
  $connection = db_connect();

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 2;                               // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'itcrprueba001@gmail.com';                 // SMTP username
  $mail->Password = 'holamundo';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->addAddress('itcrprueba001@gmail.com');               // Name is optional
  //$mail->setFrom('vsaborio4@gmail.com', 'Mailer');
?>
<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_contacto.css">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
</head>
<body>
  <header>
    <div id="header-wrapper">
       <div id="logo">
        <h1><img src="logo.png"></h1>
      </div>
      <div id="menu">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li class="current_page_item" ><a href="menu.php">Menu</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="cotizaciones.php">Cotizaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br>

  <section>
  <!-- meter lo del form -->
   <div class="div1" align="center">
    <form  method="post">
      <label for="lname">Nombre:</label>
      <input type="text" id="nombre" name="name"><br>
      <label for="lname">Asunto:</label>
      <input type="text" id="asunto" name="subject">
      <br>
	  <textarea type="textarea"rows="4" cols="40" id="msj" name="mensaje">
	  </textarea>
	  <br>
      <input type="submit" value="Enviar Correo">
    </form>
  </div>
 </section>
 

<!-- código php para mandar el correo -->
  <?php
  if (isset($_POST['mensaje'])) {
    $name = $_POST['name']; // required
    $subject = $_POST['subject']; // required
    $mensaje = $_POST['mensaje']; // required

    $mail->Subject = $name;
    $mail->Body    = 'Mi nombre es:'.$name.'  '.$mensaje;

	/*if($name or $mensaje or $subject ==	"")
	{
	echo 'Algún campo está vacío';
	break;
	}*/
    if(!$mail->send()) {
      echo '<div class="warning">Error al enviar el mensaje</div>';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      echo '<div class="success">Mensaje enviado correctamente</div>';
    }
  }
  ?>

</body>
</html>