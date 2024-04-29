<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/rangos/listado_rangos.php");
?>

  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <h1>Lista de rangos</h1>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
            <div class="card-header">
            <h3 class="card-title">Rangos Registrados</h3>
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
                        <td>Nombre Rango</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 0;
                        foreach($rangos as $rango){
                        $id_rango = $rango['id_rango'];
                        $contador+=1;
                        $nombre_rango = $rango['descripcion'];
                        ?>
                        <tr>
                            <td style="text-align: center;"><?=$contador?></td>
                            <td><?=$nombre_rango?></td>
                            <td style="text-align: center;">
                                <div class="btn-group" role="group">
                                    <a href="show.php?id=<?=$id_rango;?>"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button></a>
                                    <a href="edit.php?id=<?=$id_rango;?>"><button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button></a>
                                    <form action="<?=APP_URL."/app/controllers/rangos/delete.php";?>" onclick="borrar(event)" id="borrarRol<?=$id_rango;?>" method="POST">
                                      <input type="text" value="<?=$id_rango;?>" hidden name="id_rango">
                                      <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                      <script>
                                        function borrar(event){
                                            event.preventDefault();
                                            Swal.fire({
                                            title: "¿Quieres elimiarlo?",
                                            text: "¡Si lo eliminas, no podras revertir los cambios!",
                                            icon: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: "#3085d6",
                                            cancelButtonColor: "#d33",
                                            confirmButtonText: "¡Sí, eliminar!"
                                            }).then((result) => {
                                            if (result.isConfirmed) {
                                                var form = $('#borrarRol<?=$id_rango;?>');
                                                form.submit();
                                                Swal.fire({
                                                title: "¡Eliminado!",
                                                text: "Su registro fue eliminado con éxito.",
                                                icon: "success"
                                                });
                                            }
                                            });
                                        }
                                        </script>
                                    </form>
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