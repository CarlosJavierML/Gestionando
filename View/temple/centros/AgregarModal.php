<?php
  $mysqli = new mysqli('localhost', 'root', '', 'gestionando_n');
?>
<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		<div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Nuevo centro..</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form class="needs-validation" novalidate="" id="basic-form" method="POST" action="centros/AgregarNuevo.php" >
				<div class="row form-group">
						<label for="nombre" class="control-label" style="position:relative; top:7px;">Nombre:</label>
						<input id="nombre" type="text" class="form-control" name="nombre" required="">
                        <div class="invalid-feedback">
                        Introduzca correctamente el nombre del centro.
                        </div>
                        
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Estado:</label>
						
						<select id="id_estado" name="id_estado" class="form-control">
                        <option value="" name="id_estado">Seleccione:</option>
                            <?php
                        $query = $mysqli -> query ("SELECT * FROM estado");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[id_estado].'">'.$valores[nombre].'</option>';
                        }
                        ?>
                        </select>
					
				</div>
				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"  > Crear</button>
			</form>
            </div>

        </div>
    </div>
</div>

