<?php
$sql = "SELECT * FROM tbl_rangos WHERE estado = '1'";
$query = $pdo->prepare($sql);
$query->execute();
$rangos = $query->fetchAll(PDO::FETCH_ASSOC);
?>