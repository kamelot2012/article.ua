<?php
require_once __DIR__ . '/classes/DB.php';
$db = new DB;
$items = $db->query('SELECT * FROM articles');
var_dump($items);