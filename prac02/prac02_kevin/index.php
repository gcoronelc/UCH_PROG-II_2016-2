<?php 
@session_start();
 ?>
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>

   <nav>
   <div class="container">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo"><i class="material-icons">person_pin</i>KEVIN HUAYHUAS CARIAPAZA</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
  <!--         <li><a href="sass.html">Sass</a></li>
          <li><a href="badges.html">Components</a></li>
          <li><a href="collapsible.html">JavaScript</a></li> -->
          <p><strong>Curso:</strong> Programacion PHP</p>
        </ul>
      </div>
  </div>
    </nav>
<br>

<div class="container">

  <div class="col s12 m2 z-depth-1" style="background:#fff;padding:10px;">
<!--      <h4 class="truncate">Ejercicio </h4>
     <div class="divider"></div> -->
       <div class="section">
           <div class="row">

            <form class="col s6" id="formulario-eurekabank">
              <div class="row">
                <div class="input-field col s12">
                    <select class="icons" id="combo-credito" name="combo-credito" REQUIRED>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="1" data-icon="img/credito_personal.jpg" class="left circle" >Crédito Personal</option>
                      <option value="2" data-icon="img/credito_empresarial.jpg" class="left circle" >Crédito Empresarial</option>
                    </select>
                    <label>Tipo de Credito</label>
                </div>
              </div>
              <div class="row">
                   <div class="input-field col s12">
                    <input placeholder="S/.0.0" id="first_name" name="importe" type="text" class="validate" REQUIRED>
                    <label for="first_name">Importe de credito</label>
                  </div>
              </div>
              <div class="row">
                  <div class="input-field col s12">
                    <div id="combo-1" style="display:none;">
                       <select class="icons" id="combo-meses1" name="combo-meses1" >
                        <option value="" disabled selected>Seleccione</option>
                        <option value="12" >12 meses</option>
                        <option value="18" >18 meses</option>
                        <option value="24" >24 meses</option>
                        <option value="30" >30 meses</option>
                        <option value="36" >36 meses</option>
                      </select>
                      <label>Tiempo en meses</label>
                    </div>
                    <div id="combo-2" style="display:none;">
                       <select class="icons" id="combo-meses2" name="combo-meses2" >
                        <option value="" disabled selected>Seleccione</option>
                       <option value="6" >6 meses</option>
                        <option value="12" >12 meses</option>
                        <option value="18" >18 meses</option>
                        <option value="24" >24 meses</option>
                        <option value="30" >30 meses</option>
                        <option value="36" >36 meses</option>
                        <option value="42" >42 meses</option>
                        <option value="48" >48 meses</option>
                      </select>
                      <label>Tiempo en meses</label>
                    </div>
                  </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">Procesar
                  <i class="material-icons right">send</i>
                </button>
                </div>
              </div>

            </form>

            <div id="cargar" class="input-field col s6"><img src="img/logo.png" width="400px"></div> 

          </div>
          
      </div>
  </div>

</div>






      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
      <script type="text/javascript" src="js/codigo.js"></script>
    </body>
  </html>