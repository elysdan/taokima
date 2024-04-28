<?php
include('../../config.php');
$id_usuario = $_POST['id_usuario'];

    $sql = $pdo->prepare("DELETE FROM tbl_usuarios
                        WHERE id_usuario=:id_usuario");
    $sql->bindParam('id_usuario', $id_usuario);
        
    if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Usuario Eliminado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/usuarios");
    }else{
            session_start();
            $_SESSION['mensaje'] = "Usuario No Se Pudo Eliminar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/usuarios");
        }
?>