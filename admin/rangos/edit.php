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
                <h2>Editar Rango: <?=$nombre_rango;?></h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <div class="card-tools">
                            </div>
                        </div>
                        <div class="card-body" style="display: block;">
                            <form action="<?=APP_URL."/app/controllers/rangos/update.php"?>" method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="id_rango" value="<?=$id_rango?>" hidden>
                                            <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?=$nombre_rango;?>" placeholder="Nombre del Rango">
                                            <br>
                                            <textarea cols="30" rows="10" name="significado" id="significado" class="form-control" placeholder="Significado"><?=$significado;?></textarea> 
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                            <a href="<?= APP_URL."/admin/rangos/" ?>" class="btn btn-secondary">Regresar</a>
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