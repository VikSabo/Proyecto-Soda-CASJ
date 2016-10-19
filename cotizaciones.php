<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/estilos.css">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_cotizaciones.css">
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
            <li class="current_page_item"><a href="#">Cotizaciones</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
        </ul>
      </div>
    </div>
  </header>
  <br><br>

  <section>    
    <form class="formulario" action="action_page.php">
      <fieldset>
        <legend>Cotizaciones</legend>
        <label class="desc">*Las cotizaciones sólo se realizan para grupos superiores a 20 personas.<br><br></label>
        Nombre del contacto: <input type="text" name="nombre"> <br>
        Teléfono: <input type="text" name="telefono"> <br>
        Email: <input type="text" name="email"> <br>
        <label class="dir">Dirección:</label>
        <div class="direccion">
          Provincia:
          <select>
            <option value="SanJose">San José</option>
            <option value="Alajuela">Alajuela</option>
            <option value="Heredia">Heredia</option>
            <option value="Cartago">Cartago</option>
            <option value="Puntarenas">Puntarenas</option>
            <option value="Guanacaste">Guanacaste</option>
            <option value="Limón">Limón</option>
          </select>
          <br>
          <br>
          <textarea name="styled-textarea" id="styled1" placeholder="Ingrese la dirección del lugar..."></textarea>
        </div>
        <br>
        Fecha del evento: <input type="date" name="fecha"> <br><br>
        Número de personas que asistirá al evento: <input type="number" name="personas"> <br><br>
        Tipo de servicio: 
        <input type="radio" name="servicio" value="male"> Buffet
        <input type="radio" name="servicio" value="female"> Plato Servido
        <input type="radio" name="servicio" value="other"> Pasabocas<br><br><br>
        <label class="ser">Servicio especial o extra:</label>
        <textarea name="styled-textarea" id="styled2"></textarea>
        <br><br>
        <input type="submit" value="Realizar Cotización">
      </fieldset>
    </form>
  </section>

  <footer>
    Pida la tarjeta VIP de cliente frecuente y disfrute de sus beneficios.
  </footer>
 <script src="js/textarea-style.js"></script>
</body>
</html>