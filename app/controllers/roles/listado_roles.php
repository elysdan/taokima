<?php
$sql = "SELECT * FROM tbl_roles WHERE estado = '1'";
$query = $pdo->prepare($sql);
$query->execute();
$roles = $query->fetchAll(PDO::FETCH_ASSOC);
?>