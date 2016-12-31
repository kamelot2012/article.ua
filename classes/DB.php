<?php
define('DB_HOST', 'localhost');
define('DB_LOGIN', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'art.ua');
define('DB_TABLE', 'articles');

class DB
{
    private $link;
    public  function  DB_connect(){
        $this->link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);

    }
    public function __construct(){
        $this->DB_connect();
    }
    public function query($sql){
        $res = mysqli_query($this->link, $sql);
        if (false === $res){
            return false;
        }
        $ret = [];
        while ($row = mysqli_fetch_object($res)){
            $ret[] = $row;
        }
        return $ret;
    }
}