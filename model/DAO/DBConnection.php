<?php


class DBConnection
{
    private static $connect;

    public function __construct()
    {
    }
    public static function getConnection()
    {
        if (!isset(self::$connect)) {
            self::$connect = new PDO('mysql:host=localhost; dbname=cliente', 'root', '');
            self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connect->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }
        return self::$connect;
    }
}
