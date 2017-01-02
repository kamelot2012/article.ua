<?php

abstract class AbstractModel
{
    public $id;
    public $title;
    public $content;
    public $date;

    protected static $table;
    protected static $class;

    public static function getAll(){
        $db = new DB;
        $sql = 'SELECT * FROM ' . static::$table;
        return  $db->queryAll($sql, static::$class);
    }
    public static function getOne($id){
        $db = new DB;
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=' . $id;
        return  $db->queryOne($sql, static::$class);
    }
    public static function insertOne($title, $content){
        $db = new DB();
        $sql = "INSERT INTO " . static::$table . " (title, content) VALUES ('" . $title . "', '". $content ."')";
        return $db->insertOne($sql);
    }
}