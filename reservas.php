<?php
error_reporting(E_ALL ^ E_NOTICE);  
error_reporting(E_ERROR | E_PARSE);

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

  <!-- nav -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="src\img\GYM_ED_IMAGE.png" alt="" height="50" width="50"></a>
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
                  <a class="dropdown-item" href="piscina.php">Piscina</a>
                  <a class="dropdown-item" href="complementos.php">Complementos</a>
                </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactos">Contacto</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="reservas.php">Reservas</a>
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
<!-- nav -->

<br>
  <br>
      <div class="container col-lg-4 justify-content-center text-center ">
      
      <h1 class="h1"> Reservas </h1>
        <br>
        <h2 id = "mes"></h1>
        <br>
        <div class="cal"&gt
          <br>
          <table class="table table-bordered table-responsive-sm" id="calendar">
            <thead>
              <tr id = "headers">
                <th>Lunes</th>
                <th>Martes</th>
                <th>Miercoles</th>
                <th>Jueves</th>
                <th>Viernes</th>
                <th>Sabado</th>
                <th>Domingo</th>
              </tr>
            </thead>
            <tbody id="calendarBody">
            </tbody>
          </table>
          <div class="form-inline justify-content-center text-center">
            <button class="btn btn-outline-primary col-sm-3" id="pre" onclick="pre()" style="margin-right:30px;">Anterior</button>
            <button class="btn btn-outline-primary col-sm-3" id="nex" onclick="nex()">Siguiente</button>
          </div>
        </div>
      </div>

      <div class="container justify-content-center text-center ">
      
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            
              <!-- Modal Header -->
              <div class="modal-header justify-content-center text-center">
                <h2>Confirmar Reserva</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              
              <!-- Modal body -->
              <div class="modal-body" id="mensaje">
                Modal body..
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>

        <script>
          
          const td = new Date();
          let month = td.getMonth();
          let year = td.getFullYear();
          calendar(month, year);


          function calendar(month, years) {
            monthtw = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            daysmonth = ["31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];
            elementmonth = document.getElementById("mes");
            elementmonth.innerHTML = monthtw[month] +" "+ year;
            var tabla = document.getElementById("calendar");
            tabla.innerHTML = "";
            
            var diasemana = 1;
            var fila = document.createElement("tr");
            for (let index = 0; index < daysmonth[month]; index++) {
              
              if (index!= 0 && index%7 == 0) {
                var fila = document.createElement("tr");
              }

              var link = document.createElement("a");
              link.setAttribute('data-toggle','modal');
              link.setAttribute('data-target','#myModal');
              link.setAttribute('onclick','confirma()');
              link.style.padding = "12px";
              


              var celda = document.createElement("td");
              celda.setAttribute('class','td justify-content-center text-center');
              
              if (index+1 == td.getDay() && month == (new Date()).getMonth()) {
                celda.style.backgroundColor = "grey";
                
              }

              var diacelda = document.createTextNode(index+1);
              link.appendChild(diacelda);
              celda.appendChild(link);
              fila.appendChild(celda);
              

              if (index%7 == 6 || index+1 == daysmonth[month]) {

                tabla.appendChild(fila);
                
              }
            }
          }

          function pre() {
            month = month -1;
            
            if (month < 0) {
              month = 11;
              year = year -1;
            }   
            calendar(month, year);
            
          }

          function nex() {
            month = month +1;

            if (month > 12) {
              month = 0;
              year = year +1;
            }

            calendar(month, year);
          }

          function confirma() {
            
          }

          </script>
  
<!-- Footer -->

<?php footer();?>
    
</body>
</html>