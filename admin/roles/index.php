<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/roles/listado_roles.php");
?>

  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <h1>Lista de roles</h1>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
            <div class="card-header">
            <h3 class="card-title">Roles Registrados</h3>
            <div class="card-tools">
            <a href="create.php" type="button" class="btn btn-success">
            <i class="bi bi-plus-circle"></i></a>
            </div>

            </div>

            <div class="card-body" style="display: block;">
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr style="text-align: center;">
                        <td>Nro</td>
                        <td>Nombre Rol</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 0;
                        foreach($roles as $rol){
                        $id_rol = $rol['id_rol'];
                        $contador+=1;
                        $nombre_rol = $rol['descripcion'];
                        ?>
                        <tr>
                            <td style="text-align: center;"><?=$contador?></td>
                            <td><?=$nombre_rol?></td>
                            <td style="text-align: center;">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button>
                                    <button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                </div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
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
?>