<?php

require_once __DIR__ . '/../config/db.php';

/**
 * Connection database 
 * @param string $host
 * @param string $db
 * @param string $user
 * @param string $password
 * 
 * @return object
 */
function connect($host, $db, $user, $password)
{
    $dsn = "mysql:host={$host};dbname={$db};charset=UTF8";

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        return new PDO($dsn, $user, $password, $options);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

return connect($host, $db, $user, $password);
