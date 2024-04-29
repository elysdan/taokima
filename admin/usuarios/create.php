<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../app/controllers/roles/listado_roles.php");
include("../../app/controllers/rangos/listado_rangos.php");
include("../../admin/layout/parte1.php");
?>

<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <h1>Crear Nuevo Usuario</h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h3 class="card-title">Por favor rellene los campos solicitados</h3>
                            <div class="card-tools">
                            </div>
                        </div>

                        <div class="card-body" style="display: block;">
                            <form action="<?= APP_URL . "/app/controllers/usuarios/create.php" ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <!--Select rol -->
                                            <select name="" id="" class="form-control">
                                                <option value="0" disabled>PRIVILEGIOS</option>
                                                <?php
                                                foreach ($roles as $rol) {
                                                ?>
                                                    <option value="<?= $rol['id_rol']; ?>"><?= $rol['descripcion']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" name="nombres" id="nombres" class="form-control" placeholder="Nombre completo del usuario">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Correo del usuario">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Contrasena">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="password" name="password_repeat" id="password" class="form-control" placeholder="Repetir Contrasena">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-header">
                                    <h3 class="card-title">Rango</h3>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <!--Select rango -->
                                            <select name="" id="" class="form-control">
                                                <option value="0" disabled>RANGOS</option>
                                                <?php
                                                foreach ($rangos as $rango) {
                                                ?>
                                                    <option value="<?= $rango['id_rango']; ?>"><?= $rango['descripcion']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Crear</button>
                                            <a href="<?= APP_URL . "/admin/usuarios/" ?>" class="btn btn-secondary">Cancelar</a>
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