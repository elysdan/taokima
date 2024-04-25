<?php
include('../../config.php');
$id_rol = $_POST['id_rol'];

    $sql = $pdo->prepare("DELETE FROM tbl_roles
                        WHERE id_rol=:id_rol");
    $sql->bindParam('id_rol', $id_rol);
        
    if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Rol Eliminado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/roles");
    }else{
            session_start();
            $_SESSION['mensaje'] = "Rol No Se Pudo Eliminar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/roles");
        }
?>