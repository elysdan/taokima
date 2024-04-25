<?php
//include("../tests_errors/error_reporting.php"); 

define('SERVIDOR', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB', 'taokima');

define('APP_NAME', 'Sistema Web Taokima');
define('APP_URL', 'http://localhost/taokima');
define('KEY_API_MAPS', ''); //Esto es para dar una direccion exacta usando Google Maps

$servidor = "mysql:dbname=".DB.";host=".SERVIDOR;

try {
    $pdo = new PDO($servidor, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "Conectado a la base de datos";
} catch (PDOException $e) {
    echo "error, no estas conectado a la base de datos $e";
}

date_default_timezone_set("America/Caracas");
 $fecha_actual = date(format: 'Y-m-d');
 $fechaHora = date(format: 'Y-m-d H:i:s');
 $dia_actual = date(format: 'd');
 $mes_actual = date(format: 'm');
 $anio_actual = date(format: 'Y');

 $estado = '1';
?>