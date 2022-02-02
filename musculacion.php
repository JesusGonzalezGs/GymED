<?php
//incluimos las librerias que usaremos
include('libreria_general.php');
include("conectar_bd.php"); 
//creacion de la sesion y variables necesarias
session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
<meta name="description" content="GYMEd">
<link rel="stylesheet" href="estilos.css" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://d3js.org/d3.v4.min.js"></script>
<script src=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.js"></script>
<link
  rel="stylesheet"
  href=
"https://cdn.jsdelivr.net/npm/billboard.js/dist/billboard.min.css"
/>
<link
  rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
  type="text/css"
/>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js">
</script>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.1/Chart.min.js">
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<style>
  body {
    text-align: center;
    color: black;
  }
  h2 {
    text-align: center;
    font-family: "Verdana", sans-serif;
    font-size: 40px;
  }
  #sr-only{
    color: black;
  }
  img{
  width: 100%;
  height: 100%;
  object-fit: cover;
}

  #carrusel{
    margin-left: 20%;
    margin-right: 20%;
  }
</style>  
<?php head();?>
<body>

  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="src/Logo1.jpg" alt="" height="50" width="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Servicios
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="musculacion.php">Musculacion</a>
                  <a class="dropdown-item" href="actividades.php">Actividades</a>
                  <a class="dropdown-item" href="piscinas.php">Piscina</a>
                  <a class="dropdown-item" href="complementos.php">Complementos</a>
                </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="reservas.php">Reservas</a>
            </li>
            
            </ul>
            <ul style = "list-style-type: none; margin: 0; padding: 0;">
            <li class="nav-item dropdown active">
            <?php login_nav(); ?>
          </li>
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
          
<!-- nav -->

    <div class="cuerpo">
 <!-- Aqui va lo grueso ya tu sabe-->
      <body>
    <h1>Sala Musculacion</h1>
    <div align="center" id="carrusel">
      
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
  
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
              <img src="Imagenes/maquinas1.jpg" alt="" >
          </div>
          <div class="item">
              <img src="Imagenes/maquinas2.jpg" alt="" >
          </div>
          <div class="item">
              <img src="Imagenes/maquinas3.jpg" alt="" >
          </div>
      </div>
  
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
</div>

  
    <div class="col-xs-12 text-center">
      <h2>Aforo</h2>
    </div>
  
    <div id="donut-chart"></div>
  
    <script>
      var chart = bb.generate({
        data: {
          columns: [
            ["Restante", 2],
            ["Ocupado", 4],
          ],
          type: "donut",
          onclick: function (d, i) {
            console.log("onclick", d, i);
          },
          onover: function (d, i) {
            console.log("onover", d, i);
          },
          onout: function (d, i) {
            console.log("onout", d, i);
          },
        },
        donut: {
          title: "70 plazas disp.",
        },
        bindto: "#donut-chart",
      });
    </script>
  </body>
      
      
</div>
  
<!-- Footer -->

<?php footer();?>
    
</body>
</html>
