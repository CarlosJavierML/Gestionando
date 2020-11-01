
<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		<div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Nuevo estado.</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
              </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form class="needs-validation" novalidate="" method="POST" action="estado/AgregarNuevo.php">
				<div class="row form-group">
				<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
				<input type="text" class="form-control" name="nombre" required="">
                <div class="invalid-feedback">
                Introduzca correctamente el nombre del estado.
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" name="agregar" class="btn btn-primary"> Crear</button>
			</form>
            </div>

        </div>
    </div>
</div>