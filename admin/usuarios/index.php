<?php
//include("tests_errors/error_reporting.php"); 
include("../../app/config.php");
include("../../admin/layout/parte1.php");
include("../../app/controllers/usuarios/listado_usuarios.php");
include("../../app/controllers/rangos/listado_rangos.php");
?>

  <div class="content-wrapper">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <h1>Lista de usuarios</h1>
        </div>
        <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
            <div class="card-header">
            <h3 class="card-title">Usuarios Registrados</h3>
            <div class="card-tools">
            <a href="create.php" type="button" class="btn btn-success">
            <i class="bi bi-plus-circle"></i></a>
            </div>

            </div>

            <div class="card-body" style="display: block;">
            <table id="example1" class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr style="text-align: center;">
                        <td>Nro</td>
                        <td>Nombre</td>
                        <td>Rango</td>
                        <td>Estado</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $contador = 0;
                        foreach($usuarios as $usuario){
                        $id_usuario = $usuario['id_usuario'];
                        $contador+=1;
                        ?>
                        <tr>
                            <td style="text-align: center;"><?=$contador?></td>
                            <td><?=$usuario['nombres'];?></td>
                            <td><?= $rango['id_rango']; ?><?= $rango['descripcion']; ?></td>
                            <td><?=$usuario['estado'];?></td>
                            <td style="text-align: center;">
                                <div class="btn-group" role="group">
                                    <a href="show.php?id=<?=$id_usuario;?>"><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i></button></a>
                                    <a href="edit.php?id=<?=$id_usuario;?>"><button type="button" class="btn btn-success"><i class="bi bi-pencil"></i></button></a>
                                    <form action="<?=APP_URL."/app/controllers/roles/delete.php";?>" onclick="borrar(event)" id="borrarUsuario<?=$id_usuario;?>" method="POST">
                                      <input type="text" value="<?=$id_usuario;?>" hidden name="id_usuario">
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
                                                var form = $('#borrarUsuario<?=$id_usuario;?>');
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
  <script>
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        });
    </script>
<?php
include("../../admin/layout/parte2.php");
include("../../layout/mensajes.php");
?>