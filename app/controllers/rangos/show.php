<?php
include('../../config.php');
$id_rango = $_GET['id'];
$sql = "SELECT * FROM tbl_rangos WHERE id_rango = '$id_rango'";
$query = $pdo->prepare($sql);
$query->execute();
$rangos = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($rangos as $rango){
    $nombre_rango = $rango['descripcion'];
    $significado = $rango['significado'];
    $fecha_creado = $rango['created_at'];
    $fecha_actualizado = $rango['updated_at'];
}
?>