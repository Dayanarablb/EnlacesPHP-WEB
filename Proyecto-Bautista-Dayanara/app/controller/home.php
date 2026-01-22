<?php
$title = "Posts";

/*$dsn = "mysql:host=localhost;dbname=bd_web;charset=utf8mb4"; /*utf16 para emojis*/
/*$pdo = new PDO($dsn, "root", "");*/
/* AQUI VAMOS A PONER PUBLICACIONES PENDIENTES DEBE CARGAR DE MI BASE DE DATOS */
$posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 6")/*->fetchAll(PDO::FETCH_ASSOC)*/;
/*$title = "Inicio";*/
// LLAMAR A LA PLANTILLA DE INICIO
require __DIR__ . '/../../resources/home.template.php';
