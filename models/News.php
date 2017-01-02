<?php

class News extends AbstractModel
{
    public $id;
    public $title;
    public $content;
    public $date;

    protected static $table = DB::DB_TABLE;
    protected static $class = 'News';

}