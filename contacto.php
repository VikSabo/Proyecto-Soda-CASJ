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
  <link rel="stylesheet" type="text/css" href="estilos/estilo_contacto.css">
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
            <li><a href="#">Servicios</a></li>
            <li><a href="cotizaciones.php">Cotizaciones</a></li>
            <li class="current_page_item" ><a href="contacto.php">Contacto</a></li>
            <li><a href="#">Nosotros</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br>

  <section>
    <!-- meter lo del form -->
	<form  method="post">
  	<label>Name</label><input type="text" name="name" id="nombre"><br>
  	<br>
  	<!--E-mail: <input type="text" name="email" id="correo"><br>
  	<br> -->
  	<label>Asunto:</label><input type="text" name="subject" id="asunto"><br>
  	<br>
  	<label>Texto:</label>
    <input type="text" name="texto" id="cuerpo"><br>
  	<br>
    <input name="Submit" type="submit" value="Submit" />
  </form> 

<!-- código php para mandar el correo -->

<?php
require("PHPMailer_5.2.4/class.phpmailer.php");

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


if (isset($_POST['texto'])) {
  $name = $_POST['name']; // required
  $subject = $_POST['subject']; // required
  $texto = $_POST['texto']; // required

  $mail->Subject = $name;
  $mail->Body    = 'Hola, mi nombre es:'.$name.'  '.$texto;

  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    echo 'Message has been sent';
  }
}



?>

  </section>

  <aside>
    <div id="sidebar">
      
    </div>
  </aside>
 
</body>
</html>