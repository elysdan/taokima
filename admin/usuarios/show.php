<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/usuarios/show.php");
?>
  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <h2>Usuario: <?=$nombre_usuario;?></h2>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
            <div class="card-header">
            <div class="card-tools">
            </div>

            </div>

            <div class="card-body" style="display: block;">
            <form action="<?=APP_URL."/app/controllers/usuarios/create.php"?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr style="text-align: center;">
                                        <td>Nombre Usuario</td>
                                        <td>Privilegios</td>
                                        <td>Rango</td>
                                        <td>Fecha de creacion</td>
                                        <td>Fecha de actualizacion</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?=$nombre_usuario?></td>
                                        <td><?=$rol_id['descripcion'];?></td>
                                        <td><?=$rango_id['descripcion'];?></td>
                                        <td><?=$fecha_creado?></td>
                                        <td><?=$fecha_actualizado?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="<?=APP_URL."/admin/usuarios/"?>" class="btn btn-secondary">Regresar</a>
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
?>