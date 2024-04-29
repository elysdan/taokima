<?php
include('../../config.php');
$nombre_usuario = $_POST['nombres'];
$nombre_usuario = mb_strtoupper($nombre_usuario, 'UTF-8');
$rango_id = $_POST['rango_id'];
$rol_id = $_POST['rol_id'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

if ($password == $password_repeat) {
    //echo "las contraseñas son iguales";
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = $pdo->prepare('INSERT INTO tbl_usuarios
    (nombres,rango_id,rol_id,email,password, created_at, estado)
    VALUES ( :nombres,:rango_id,:rol_id,:email,:password,:created_at,:estado)');

    $sql->bindParam(':nombres',$nombre_usuario);
    $sql->bindParam(':rango_id',$rango_id);
    $sql->bindParam(':rol_id',$rol_id);
    $sql->bindParam(':email',$email);
    $sql->bindParam(':password',$password);
    $sql->bindParam('created_at',$fechaHora);
    $sql->bindParam('estado',$estado);

    if ($nombre_usuario == "") {
        session_start();
        $_SESSION['mensaje2'] = "Por favor no deje campos vacios";
        $_SESSION['icono2'] = 'error';
        header('Location:'.APP_URL."/admin/usuarios/create.php");
    }else{
        try {
            if($sql->execute()){
                session_start();
                $_SESSION['mensaje'] = "Usuario Registrado Correctamente";
                $_SESSION['icono'] = 'success';
                header('Location:'.APP_URL."/admin/usuarios");
            }else{
                session_start();
                $_SESSION['mensaje'] = "Usuario No Se Pudo Registrar";
                $_SESSION['icono'] = 'error';
                header('Location:'.APP_URL."/admin/usuarios/create.php");
            }
        } catch (Exception $e) {
            session_start();
            $_SESSION['mensaje2'] = "Este usuario ya existe".$e;
            $_SESSION['icono2'] = 'error';
            header('Location:'.APP_URL."/admin/usuarios/create.php");
        }
    }

}else{
    session_start();
    $_SESSION['mensaje2'] = "La contraseña ingresada es diferente, por favor repita sus contraseñas";
    $_SESSION['icono2'] = 'error';
    header('Location:'.APP_URL."/admin/usuarios/create.php");
}
?>
