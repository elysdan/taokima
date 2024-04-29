<?php
include('../../config.php');
$id_rango = $_POST['id_rango'];

    $sql = $pdo->prepare("DELETE FROM tbl_rango
                        WHERE id_rango=:id_rango");
    $sql->bindParam('id_rango', $id_rango);
        
    if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Rango Eliminado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/rangos");
    }else{
            session_start();
            $_SESSION['mensaje'] = "Rango No Se Pudo Eliminar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/rangos");
        }
?>