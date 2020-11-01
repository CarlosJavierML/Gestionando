<?php
  $mysqli = new mysqli('localhost', 'root', '', 'gestionando_n');
?>
<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		<div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Nuevo pago.</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form class="needs-validation" novalidate="" id="basic-form" method="POST" action="pagos/AgregarNuevo.php" >

                 <div class="row form-group">
						<label for="id_cotizante" class="control-label" style="position:relative; top:7px;">Cotizante:</label>
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
                        Introduzca correctamente el ID de la afiliacion.
                        </div>
                        
				    </div>
				<div class="row form-group"> 
                <label for="fecha_pago_cuota" class="control-label" style="position:relative; top:7px;">Fecha pago:</label>
                <input id="fecha_pago_cuota" type="date" class="form-control" name="fecha_pago_cuota" required="">
                    *Recuerde que el ultimo pago debe realizarse el dia 15.
                <div class="invalid-feedback">
                        Introduzca una fecha valida.
                </div>
                </div>
                <div class="row form-group">
						<label for="valor_pagado" class="control-label" style="position:relative; top:7px;">Valor pagado:</label>
						<input id="valor_pagado" type="number" class="form-control" name="valor_pagado"  required="">
                        <div class="invalid-feedback">
                        Introduzca correctamente el valor del pago.
                        </div>
                        
				</div>
				<div class="row form-group">
						<label class="control-label" style="position:relative; top:7px;">Estado:</label>
						
						<select id="id_estado" name="id_estado" class="form-control">
                        <?php
                        $query = $mysqli -> query ("SELECT * FROM estado");
                        while ($valores = mysqli_fetch_array($query)) {
                            echo '<option value="'.$valores[id_estado].'">'.$valores[nombre].'</option>';
                        }
                        ?>>
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

