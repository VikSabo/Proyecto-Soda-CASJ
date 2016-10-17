<!DOCTYPE html>
<html>
<head>
  <title>M&M Soluciones</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos/estilo_index.css">
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
            <li class="current_page_item"><a href="#">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
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
    <h1 id="fuente">M&M Soluciones</h1>
    <div class="w3-content" style="max-width:400px">
      <img class="mySlides" src="http://i67.tinypic.com/s25quc.jpg" style="width:100%">
      <img class="mySlides" src="http://www.vero4travel.es/wp-content/uploads/2015/11/casado1-e1446457683842.jpg" style="width:100%">
      <img class="mySlides" src="http://vivaelmenu.com/wp-content/uploads/2014/04/LASABROSURA004.jpg" style="width:100%">
      <div align="center"><h4>Galería de Platillos</h4></div>
    </div>
  </section>
  <script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
    </script>

  <aside>
    <div id="sidebar">
      <img src="sabiasque.jpeg" width="390" height="360">      
    </div>
  </aside>

  <footer id="footer">
    <div align="center">
      <label>Síguenos en:</label>
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