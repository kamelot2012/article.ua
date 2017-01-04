<?php

class NewsController
{
    public function actionAll(){
        $news = News::getAll();
        $view = new View();
        $view->items = $news;
        $view->display('news/all.php');

//
//        foreach ($view as $key => $value) {
//            echo $key . ' => ' . $value . '<br>';
//        }
    }
    public  function actionOne(){
        $id = $_GET['id'];
        $news = News::getOne($id);
        $view = new View();
        $view->item = $news;
        $view->display('news/one.php');
    }
}