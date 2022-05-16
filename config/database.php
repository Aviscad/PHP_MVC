<?php
class Database
{
    public static function Connect()
    {
        $db =new mysqli('localhost','viscad','viscad','ventas');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
