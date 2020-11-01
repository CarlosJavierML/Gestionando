<?php
  $mysqli = new mysqli('localhost', 'root', '', 'gestionando_n');
?>
<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		<div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Nuevo afiliacion.</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form class="needs-validation" novalidate="" id="basic-form" method="POST" action="afiliaciones/AgregarNuevo.php" >
				<div class="row form-group">
						<label for="id_cotizante" class="control-label" style="position:relative; top:7px;">Cotizante:</label>
						<!--<input id="id_cotizante" type="number" class="form-control" name="id_cotizante" required=""> -->
                        <select class="form-control" name="id_cotizante" id="id_cotizante">
                            <option value="" name="id_cotizante">Seleccione:</option>
                            <?php
                        $query = $mysqli -> query ("SELECT * FROM cotizante");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[id_cotizante].'">'.$valores[nombre].'</option>';
                        }
                        ?>
                        </select>
                        <div class="invalid-feedback">
                        Introduzca correctamente el Id del cotizante.
                        </div>
				</div>
                <div class="row form-group">
						<label for="id_ent" class="control-label" style="position:relative; top:7px;">Entidad:</label>
						<select class="form-control" name="id_ent" id="id_ent">
                            <option value="" name="id_ent">Seleccione:</option>
                            <?php
                        $query = $mysqli -> query ("SELECT * FROM entidad_administradora");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[id_ent].'">'.$valores[nombre].'</option>';
                        }
                        ?>
                            </select>
                        <div class="invalid-feedback">
                        Introduzca correctamente el Id de la entidad.
                        </div>
				</div>
                <div class="row form-group">
						<label for="id_centro" class="control-label" style="position:relative; top:7px;">Centro:</label>
						<select class="form-control" name="id_centro" id="id_centro">
                            <option value="" name="id_centro">Seleccione:</option>
                            <?php
                        $query = $mysqli -> query ("SELECT * FROM centro");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[id_centro].'">'.$valores[nombre].'</option>';
                        }
                        ?>
                            </select>
                        <div class="invalid-feedback">
                        Introduzca correctamente el Id del centro.
                        </div>
				</div>
                <div class="row form-group">
						<label for="total_pagar" class="control-label" style="position:relative; top:7px;">Total pagado:</label>
						<input id="total_pagar" type="number" class="form-control" name="total_pagar" min="10000" max="1000000" required="" >
                        <div class="invalid-feedback">
                        Introduzca correctamente un valor.
                        </div>
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Estado:</label>
						
						<select class="form-control" name="id_estado" id="id_estado">
                            <option value="" >Seleccione:</option>
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

