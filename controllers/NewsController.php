<?php

class NewsController
{
    public function actionAll(){
        $items = News::getAll();
        include_once __DIR__ . '/../views/news/all.php';
    }
    public  function actionOne(){
        $id = $_GET['id'];
        $item = News::getOne($id);
        include_once __DIR__ . '/../views/news/one.php';
    }
}