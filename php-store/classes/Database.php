<?php

class Database
{
    private function __construct() {}

    private static ?PDO $instance = null;
    
    public static function getConnection(): PDO
    {
        [
            'HOST' => $dbHost,
            'PORT' => $dbPort,
            'DB_NAME' => $dbName,
            'CHARSET' => $dbCharset,
            'USER' => $dbUser,
            'PASSWORD' => $dbPassword
        ] = parse_ini_file(__DIR__ . '/../config/db.ini');
        
        $dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=$dbCharset";

        if (self::$instance === null) {
            self::$instance = new PDO($dsn, $dbUser, $dbPassword);
        }
        
        return self::$instance;
    }
}