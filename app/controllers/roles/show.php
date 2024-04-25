<?php
include('../../config.php');
$id_rol = $_GET['id'];
$sql = "SELECT * FROM tbl_roles WHERE id_rol = '$id_rol'";
$query = $pdo->prepare($sql);
$query->execute();
$roles = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($roles as $rol){
    $nombre_rol = $rol['descripcion'];
    $fecha_creado = $rol['created_at'];
    $fecha_actualizado = $rol['updated_at'];
}
?>