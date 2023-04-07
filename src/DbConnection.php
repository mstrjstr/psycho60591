<?php
namespace App;
use PDO;
use PDOException;

class DbConnection
{
    private static $connection;
    public static function getConnection(): PDO
    {
        try {
            if (!self::$connection) self::$connection = new PDO("mysql:host=92.246.214.15:3306;dbname=ais_ryzhenko4878_psycho", "ais_ryzhenko4878_psycho", "yL9qIriK59BfTnSfiI8lDQYv");
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Подключение к БД выполнено";
            return (self::$connection);
        }
        catch(PDOException $e) {
            echo "Ошибка подключения к БД: " . $e->getMessage(), $e->getCode( );
            die();
        }
    }
}

