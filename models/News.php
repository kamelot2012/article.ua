<?php

require_once __DIR__ . '/../classes/DB.php';

class News
{
    public $id;
    public $title;
    public $content;

    public static function getAll(){
        $db = new DB;
        return  $db->query('SELECT * FROM ' . DB::DB_TABLE, 'News');

}
}