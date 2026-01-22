<?php
$title = "Proyectos";
/*$dsn = "mysql:host=localhost;dbname=bd_web;charset=utf8mb4"; /*utf16 para emojis*/

/*$pdo = new PDO($dsn, "root", "");*/
$links = $db->query("SELECT * FROM links")/*->fetchAll(PDO::FETCH_ASSOC)*/;
require __DIR__ . '/../../resources/links.template.php';
?>
