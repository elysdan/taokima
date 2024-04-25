<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/roles/show.php");
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <h2>Editar Rol: <?= $nombre_rol; ?></h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <form action="<?=APP_URL."/app/controllers/roles/update.php"?>" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="id_rol" value="<?=$id_rol?>" hidden>
                                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?=$nombre_rol;?>" placeholder="Nombre del Rol">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                            <a href="<?= APP_URL."/admin/roles/" ?>" class="btn btn-secondary">Regresar</a>
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