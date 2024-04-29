<?php
include('../../config.php');
$nombre_rango = $_POST['descripcion'];
$significado = $_POST['significado'];
$nombre_rango = mb_strtoupper($nombre_rango, 'UTF-8');
$significado = mb_strtoupper($significado, 'UTF-8');
if ($nombre_rango == "") {
    session_start();
    $_SESSION['mensaje2'] = "Por favor no deje campos vacios";
    $_SESSION['icono2'] = 'error';
    header('Location:'.APP_URL."/admin/rangos/create.php");
}else{
    $sql = $pdo->prepare("INSERT INTO tbl_rangos(descripcion, significado, created_at, estado) 
                    VALUES(:descripcion, :significado, :created_at, :estado)");
    $sql->bindParam('descripcion', $nombre_rango);
    $sql->bindParam('significado', $significado);
    $sql->bindParam('created_at', $fechaHora);
    $sql->bindParam('estado', $estado);

    try {
        if($sql->execute()){
            session_start();
            $_SESSION['mensaje'] = "Rango Registrado Correctamente";
            $_SESSION['icono'] = 'success';
            header('Location:'.APP_URL."/admin/rangos");
        }else{
            session_start();
            $_SESSION['mensaje'] = "Rango No Se Pudo Registrar";
            $_SESSION['icono'] = 'error';
            header('Location:'.APP_URL."/admin/rangos/create.php");
        }
    } catch (Exception $e) {
        session_start();
        $_SESSION['mensaje2'] = "Este rango ya existe";
        $_SESSION['icono2'] = 'error';
        header('Location:'.APP_URL."/admin/rangos/create.php");
    }
}
?>