<?php
$sql = "SELECT * FROM tbl_usuarios WHERE estado = '1'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
?>