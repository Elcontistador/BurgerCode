<?php

class Database 
{

    private static $dbHost = "host";
    private static $dbport = "port";
    private static $dbName ="Burger_code";
    private static$dbUser = "demo";
    private static$dbUserPassword = "xxxxxxxx";

    private static $connection = null;

    public static function connect() {
        try {
            self::$connection = new PDO("mysql:host=" . self::$dbHost ."; port=" . self::$dbport .";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
        } 
        catch (PDOException $e) {
            die("". $e->getMessage());
        }
        return self::$connection;
    }
    public static function disconnect() {
        self::$connection = null;
    }
}

?>