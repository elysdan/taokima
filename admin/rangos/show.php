<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/rangos/show.php");
?>
  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <h2>Rango: <?=$nombre_rango;?></h2>
        </div>
        <div class="row">
        <div class="col-md-8">
            <div class="card shadow-sm">
            <div class="card-header">
            <div class="card-tools">
            </div>

            </div>

            <div class="card-body" style="display: block;">
            <form action="<?=APP_URL."/app/controllers/rangos/create.php"?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <table class="table table-bordered">
                                <thead class="table-dark">
                                    <tr style="text-align: center;">
                                        <td>Nombre Rango</td>
                                        <td>Significado</td>
                                        <td>Fecha de creacion</td>
                                        <td>Fecha de actualizacion</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?=$nombre_rango?></td>
                                        <td><?=$significado?></td>
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
                            <a href="<?=APP_URL."/admin/rangos/"?>" class="btn btn-secondary">Regresar</a>
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