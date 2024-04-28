<?php
include('../../config.php');
$id_usuario = $_POST['id_usuario'];
$nombre_usuario = $_POST['nombres'];
$nombre_usuario = mb_strtoupper($nombre_usuario, 'UTF-8');
if ($nombre_usuario == "") {
    session_start();
    $_SESSION['mensaje2'] = "Por favor no deje campos vacios";
    $_SESSION['icono2'] = 'error';
    header('Location:'.APP_URL."/admin/usuarios/edit.php?id=");
}else{
    $sql = $pdo->prepare("UPDATE tbl_usuarios 
    SET nombres=:nombres, updated_at=:updated_at
    WHERE id_usuario=:id_usuario");
    $sql->bindParam('nombres', $nombre_usuario);
    $sql->bindParam('updated_at', $fechaHora);
    $sql->bindParam('id_usuario', $id_usuario);
    try {
        if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Usuario Actualizado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/roles");
        }else{
            session_start();
            $_SESSION['mensaje'] = "Usuario No Se Pudo Actualizar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/usuarios/edit.php?id=".$id_usuario);
        }
    } catch (Exception $e) {
        session_start();
        $_SESSION['mensaje2'] = "Este usuario ya existe";
        $_SESSION['icono2'] = 'error';
        header('Location:'.APP_URL."/admin/usuarios/edit.php?id=".$id_usuario);
    }
}
?>