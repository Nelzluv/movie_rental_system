<?php
    define('db_host', '127.0.0.1');
    define('db_user', 'root');
    define('db_name', 'id6907796_movies_db');
    define('db_password', '');
    try{
        $pdo = new PDO("mysql:host=".db_host.";dbname=".db_name, db_user, db_password);
    } catch(PDOException $e){
        echo($e->getMessage());
    }
 ?>