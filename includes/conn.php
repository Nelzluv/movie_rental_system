<?php
    define('db_host', 'localhost');
    define('db_user', 'root');
    //comented section is the hosted version information
    //define('db_user', 'id6907796_admin');
    //define('db_name', 'id6907796_movies_db');
    //define('db_password', 'element???');
    define('db_name', 'movies_db');
    define('db_password', '');
    try{
        $pdo = new PDO("mysql:host=".db_host.";dbname=".db_name, db_user, db_password);
    } catch(PDOException $e){
        echo($e->getMessage());
    }
 ?>