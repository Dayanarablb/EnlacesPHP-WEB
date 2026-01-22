<?php
/*metodos y atributos para conevtarme a la base de datos */
class Database{ 
    
private $connection;
public function __construct(){

    $dsn = "mysql:host=localhost;dbname=bd_web;charset=utf8mb4"; 
    $this->connection = new PDO($dsn, "root", "");
}

public function query($sql)
{
    return $this->connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

}




