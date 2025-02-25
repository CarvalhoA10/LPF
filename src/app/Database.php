<?php

class Database
{
    // Conexão de database 
    public static function connect()
    {
        require "./configuration.php";
        try
        {
            $pdo = new PDO("mysql:host=".$database_url.";dbname=$database_name", $database_username, $database_password);
            return $pdo;
        }
        catch(Exception $ex)
        {
            die($ex->getMessage());
        }

    }

}