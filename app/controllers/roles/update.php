<?php
include('../../config.php');
$id_rol = $_POST['id_rol'];
$nombre_rol = $_POST['descripcion'];
$nombre_rol = mb_strtoupper($nombre_rol, 'UTF-8');
if ($nombre_rol == "") {
    session_start();
    $_SESSION['mensaje2'] = "Por favor no deje campos vacios";
    $_SESSION['icono2'] = 'error';
    header('Location:'.APP_URL."/admin/roles/edit.php?id=");
}else{
    $sql = $pdo->prepare("UPDATE tbl_roles 
    SET descripcion=:descripcion, updated_at=:updated_at
    WHERE id_rol=:id_rol");
    $sql->bindParam('descripcion', $nombre_rol);
    $sql->bindParam('updated_at', $fechaHora);
    $sql->bindParam('id_rol', $id_rol);
    try {
        if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Rol Actualizado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/roles");
        }else{
            session_start();
            $_SESSION['mensaje'] = "Rol No Se Pudo Actualizar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/roles/edit.php?id=".$id_rol);
        }
    } catch (Exception $e) {
        session_start();
        $_SESSION['mensaje2'] = "Este rol ya existe";
        $_SESSION['icono2'] = 'error';
        header('Location:'.APP_URL."/admin/roles/edit.php?id=".$id_rol);
    }
}
?>