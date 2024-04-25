<?php
include("../app/config.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_usuarios WHERE email = '$email' AND estado = '1'";
$query = $pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
//print_r($usuarios);

$contador = 0;

foreach($usuarios as $usuario){
    $password_tabla = $usuario['password'];
    $contador+=1;
}

if (($contador>0) && (password_verify($password, $password_tabla))) {
    session_start();
    $_SESSION['mensaje'] = 'Bienvenido Admin';
    $_SESSION['icono'] = 'success';
    $_SESSION['sesion_email'] = $email;
    header('Location:'.APP_URL."/admin");
}else{
    //die("entro");
    session_start();
    $_SESSION['mensaje'] = 'Los datos ingresados son incorrectos';
    $_SESSION['icono'] = 'error';
    header('Location:'.APP_URL."/login");
}

?>