<?php


class DB
{
    const DB_HOST = 'localhost';
    const DB_LOGIN = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'art.ua';
    const DB_TABLE = 'articles';

    private $link;
    private  function  DB_connect(){
        $this->link = mysqli_connect(self::DB_HOST, self::DB_LOGIN, self::DB_PASSWORD, self::DB_NAME);
    }
    public function __construct(){
        $this->DB_connect();
    }
    public function query($sql, $class = 'stdClass'){
        $res = mysqli_query($this->link, $sql);
        if (false === $res){
            return false;
        }
        $ret = [];
        while ($row = mysqli_fetch_object($res, $class)){
            $ret[] = $row;
        }
        return $ret;
    }
}