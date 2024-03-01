<?php

class Database
{
    // TODO: Implement singleton pattern
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
        
        return new PDO($dsn, $dbUser, $dbPassword);
    }
}