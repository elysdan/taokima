<?php
include('../../config.php');
$id_usuario = $_GET['id'];
$sql = "SELECT * FROM tbl_usuarios WHERE id_usuario = '$id_usuario'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){
    $nombre_usuario = $usuario['nombres'];
    $rango_id = $usuario['rango_id'];
    $rol_id = $usuario['rol_id'];
    $fecha_creado = $usuario['created_at'];
    $fecha_actualizado = $usuario['updated_at'];
}
?>