<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../admin/layout/parte1.php");

?>

  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <h1>Crear Nuevo Rol</h1>
        </div>
        <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
            <div class="card-header">
            <h3 class="card-title">Por favor rellene los campos solicitados</h3>
            <div class="card-tools">
            <a href="create.php" type="button" class="btn btn-success">
            <i class="bi bi-plus-circle"></i></a>
            </div>

            </div>

            <div class="card-body" style="display: block;">
            <form action="<?=APP_URL."/app/controllers/roles/create.php"?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <!-- Descripcion = Nombre Rol -->
                            <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Nombre del Rol"> 
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Crear</button>
                            <a href="" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>

        </div>
        </div>
      </div>
    </div>
  </div>

<?php
include("../../admin/layout/parte2.php");
include("../../layout/mensajes.php");
include("../../layout/mensajes2.php");
?>