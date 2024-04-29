<?php
include('../../config.php');
$id_rango = $_POST['id_rango'];
$nombre_rango = $_POST['descripcion'];
$significado = $_POST['significado'];
$nombre_rango = mb_strtoupper($nombre_rango, 'UTF-8');
$significado = mb_strtoupper($significado, 'UTF-8');
if ($nombre_rango == "") {
    session_start();
    $_SESSION['mensaje2'] = "Por favor no deje campos vacios";
    $_SESSION['icono2'] = 'error';
    header('Location:'.APP_URL."/admin/rangos/edit.php?id=");
}else{
    $sql = $pdo->prepare("UPDATE tbl_rangos 
    SET descripcion=:descripcion, significado=:significado, updated_at=:updated_at
    WHERE id_rango=:id_rango");
    $sql->bindParam('descripcion', $nombre_rango);
    $sql->bindParam('significado', $significado);
    $sql->bindParam('updated_at', $fechaHora);
    $sql->bindParam('id_rango', $id_rango);
    try {
        if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Rango Actualizado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/rangos");
        }else{
            session_start();
            $_SESSION['mensaje'] = "Rango No Se Pudo Actualizar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/rangos/edit.php?id=".$id_rango);
        }
    } catch (Exception $e) {
        session_start();
        $_SESSION['mensaje2'] = "Este rango ya existe";
        $_SESSION['icono2'] = 'error';
        header('Location:'.APP_URL."/admin/rangos/edit.php?id=".$id_rango);
    }
}
?>