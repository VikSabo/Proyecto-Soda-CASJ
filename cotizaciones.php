<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styles_cotizaciones.css">
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
            <li><a href="#">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="#">Servicios</a></li>
            <li class="current_page_item"><a href="#">Cotizaciones</a></li>
            <li><a href="#">Contacto</a></li>
            <li><a href="#">Nosotros</a></li>
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
        Dirección:
        <div class="direccion">
          Provincia:
          <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select>
          <br>
          Cantón:
          <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select>
          <br>
          Distrito:
          <select>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="opel">Opel</option>
            <option value="audi">Audi</option>
          </select>
          <br>
          Descripción:
          <textarea></textarea>
        </div>
        <br>
        Fecha del evento: <input type="date" name="fecha"> <br>
        Número de personas que asistirá al evento: <input type="text" name="personas"> <br>
        Tipo de servicio: 
        <input type="radio" name="servicio" value="male"> Buffet
        <input type="radio" name="servicio" value="female"> Plato Servido
        <input type="radio" name="servicio" value="other"> Pasabocas<br>
        Servicio especial o extra:
        <textarea></textarea>
        <br><br>
        <input type="submit" value="Realizar Cotización">
      </fieldset>
    </form>
  </section>

  <section>
    <div class="vip">
      Pida la tarjeta VIP de cliente frecuente y disfrute de sus beneficios.
    </div>
  </section>

  <footer id="footer">
    <div align="center">
      <label>Siguenos en:</label>
      <ul class="soc">
        <li><a class="soc-twitter" href="#"></a></li>
        <li><a class="soc-facebook" href="#"></a></li>
        <li><a class="soc-google" href="#"></a></li>
      </ul>
       &copy; Instituto Tecnológico de Costa Rica 2016
    </div>
  </footer>
 
</body>
</html>