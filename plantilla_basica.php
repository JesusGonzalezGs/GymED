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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gimnasio ED</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 


</head>
<body>
<span>
  <!-- nav izquiedo -->
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
                  <a class="dropdown-item" href="#">Musculacion</a>
                  <a class="dropdown-item" href="#">Actividades</a>
                  <a class="dropdown-item" href="#">Piscina</a>
                  <a class="dropdown-item" href="#">Complementos</a>
                </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Reservas</a>
            </li>
            
            </ul>
            <!-- login -->
            <ul style = "list-style-type: none; margin: 0; padding: 0;">
            <li class="nav-item dropdown active">
            <?php login_nav(); ?>
          </li>
          </ul>
          <!-- barra de busqueda -->
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>  
        </div>
      </nav>
          </span>


    <div>
 <!-- Aqui va lo grueso ya tu sabe-->
 <p>La Biblia (del latín biblĭa, y este del griego βιβλία biblía, ‘libros’)1​ es un conjunto de libros canónicos que en el cristianismo y en otras religiones, se consideran producto de inspiración divina y un reflejo o registro de la relación entre Dios y la humanidad. La Biblia está organizada por dos partes principales; Antiguo Testamento (Tanaj, libros sagrados canónicos en el judaísmo) y el Nuevo Testamento que se enfoca en Jesucristo y el cristianismo primitivo.

Fue en el Concilio de Roma del año 382, cuando la Iglesia católica junto al papa Dámaso I instituyeron el Canon Bíblico con la lista del Nuevo Testamento similar al de Atanasio de Alejandría y los libros del Antiguo Testamento de la Versión de los LXX. Esta versión fue traducida del griego al latín por Jerónimo (la Vulgata) por encargo de la Iglesia. Posteriormente los Concilios regionales III de Hipona del 393, III de Cartago del 397 y IV de Cartago del 419, en los cuales participó Agustín de Hipona, aprobaron definitivamente dicho canon. En el año 405 esta lista fue enviada por Inocencio al obispo Exuperio de Tolosa (en la Galia, hoy Francia), donde aparece el canon bíblico con los 73 libros ya existentes. El concilio de Trento fijó el canon de la Iglesia católica declarándolo dogma.2​

Se estima que a lo largo de los siglos se han producido alrededor de cinco mil millones de copias de la Biblia en todas sus variedades (aunque algunos las cifran en muchas más3​), la mayoría en las últimas décadas (tres mil novecientos millones entre los años 1960 y 20134​), lo que la convierte en el libro más distribuido y vendido de la historia, siendo frecuentemente reconocido como el libro más influyente de todos los tiempos.5​6​7​

Se atribuye el gran éxito de su distribución en los últimos tiempos a la imprenta, habiendo sido el primer libro realizado por medio de la impresión con tipos móviles (la conocida como Biblia de Gutenberg).8​ En mayo de 2000, se afirmó que «la Biblia ha hecho más para dar forma a la literatura, la cultura y el entretenimiento, que ningún otro libro que se haya escrito. Su influencia en la historia mundial no tiene equiparable, y no tiene síntomas de estar menguando».9​ Cada año se venden unos cien millones de ejemplares de la Biblia,10​11​ habiendo sido traducida a 438 idiomas en su totalidad (Antiguo Testamento, Nuevo Testamento y textos adicionales), y de forma parcial al menos a 2454 idiomas.12​13​ </p>

</div>
  
<!-- Footer -->

<?php footer();?>
    
</body>
</html>