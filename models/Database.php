<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=127.0.0.1;dbname=altermamx;charset=utf8', 'root', 'jorge020569');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}