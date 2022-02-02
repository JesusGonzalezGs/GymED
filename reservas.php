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
  <br>

    <div class="container">
      <div class="row">
        <div class="col-5 ">
              <h1 id = "mes"></h1>
              <br>
              <div class="cal"&gt
                <br>
                <table class="table table-bordered table-responsive-sm table-hover" id="calendar">
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
            <div class="container col-lg-4 justify-content-center text-center ">
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
                ¿Confrimamos su reserva para el siguiente dia?
                <p id="infodate"></p>
              </div>
              
              <!-- Modal footer -->
              <div class="modal-footer">
              
                <button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:20%">No</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:20%">Sí</button>
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
            daysweek = ["lun", "mar", "mié", "jue", "vie", "sáb", "dom"];
            monthtw = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            daysmonth = ["31", "28", "31", "30", "31", "30", "31", "31", "30", "31", "30", "31"];
            elementmonth = document.getElementById("mes");
            elementmonth.innerHTML = monthtw[month] +" "+ year;
            var tabla = document.getElementById("calendarBody");
            tabla.innerHTML = "";
            
            var diasemana = 1;
            var fila = document.createElement("tr");


            var fiw = new Date(years, month, 1);
            let firstDay = fiw.toLocaleString('es-ES', { weekday: 'short' });

            var empezamos = false;
            let contador = 0;


            for (; contador < daysweek.length; contador++) {
              if(daysweek[contador] == firstDay){
                break;
              }
            }
            
            let finacel = parseInt(daysmonth[month]) + contador;

            for (let index = 0; index < finacel; index++) {
              diacuadri = index + 1 - contador;

              if (index!= 0 && index%7 == 0) {
                var fila = document.createElement("tr");
              }

              var celda = document.createElement("td");
              celda.setAttribute('class','td justify-content-center text-center');

              if (index+1 == td.getDay() && month == (new Date()).getMonth()) {
                celda.style.backgroundColor = "grey";
                
              }

              var link = document.createElement("a");
              link.setAttribute('data-toggle','modal');
              link.setAttribute('data-target','#myModal');
              link.setAttribute('onclick','  confirm(event); return false;');
              link.style.padding = "12px";
              
              
              if (index-contador > -1) {
                var diacelda = document.createTextNode(diacuadri);
                link.appendChild(diacelda);
              }
              
              celda.appendChild(link);
              fila.appendChild(celda);
              

              if (index%7 == 6 || index+1 == finacel) {

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
            month = month + 1;

            if (month > 11) {
              month = 0;
              year = year + 1;
            }

            calendar(month, year);
          }

          function confirm(e) {
            document.getElementById("infodate").innerHTML = e.target.innerText + " " + monthtw[month] + " " + year;
          }
          </script>
  


<?php footer();?>
    
</body>
</html>