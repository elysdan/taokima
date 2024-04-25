<?php
include('../../config.php');
$nombre_rol = $_POST['descripcion'];
$nombre_rol = mb_strtoupper($nombre_rol, 'UTF-8');
if ($nombre_rol == "") {
    session_start();
    $_SESSION['mensaje2'] = "Por favor no deje campos vacios";
    $_SESSION['icono2'] = 'error';
    header('Location:'.APP_URL."/admin/roles/create.php");
}else{
    $sql = $pdo->prepare("INSERT INTO tbl_roles(descripcion, created_at, estado) 
                    VALUES(:descripcion, :created_at, :estado)");
    $sql->bindParam('descripcion', $nombre_rol);
    $sql->bindParam('created_at', $fechaHora);
    $sql->bindParam('estado', $estado);

    try {
        if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Rol Registrado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/roles");
        }else{
            session_start();
            $_SESSION['mensaje'] = "Rol No Se Pudo Registrar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/roles/create.php");
        }
    } catch (Exception $e) {
        session_start();
        $_SESSION['mensaje2'] = "Este rol ya existe";
        $_SESSION['icono2'] = 'error';
        header('Location:'.APP_URL."/admin/roles/create.php");
    }
}
?>