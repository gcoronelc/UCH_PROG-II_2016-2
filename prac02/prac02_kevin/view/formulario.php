
  <div class="row" >
    <form class="col s12"  id="formulario-agregar" method="post" action="service/agregarService.php">
      <div class="row">
        <div class="input-field col s6">
          <input id="last_name" type="text" name="nombre" id="nombre" class="validate" REQUIRED>
          <label for="last_name">Nombre</label>
        </div>
      </div>
      <div class="row">
          <div class="input-field col s6">
          <input id="last_name" type="text" name="precio" id="precio" class="validate" REQUIRED>
          <label for="last_name">Precio</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="last_name" type="text" name="cant" id="cant" class="validate" REQUIRED>
          <label for="last_name">Cantidad</label>
        </div>
      </div>
      	 <button class="btn waves-effect waves-light" type="submit">Agregar
   			 <i class="material-icons right">send</i>
 		 </button>
    </form>
  </div>