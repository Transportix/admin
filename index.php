<?php require_once '../script/pdocrud.php'; ?>

<?php
$pdocrud = new PDOCrud();
echo $pdocrud->dbTable("employee")->render();
?>

Conexion