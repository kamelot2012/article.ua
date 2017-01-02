<?php

class AdminController
{
      public  function actionOne(){
          include_once __DIR__ . '/../views/news/insert.php';
          $title = $_POST['title'];
          $content = $_POST['content'];
          $item = News::insertOne($title, $content);
            echo $item;

    }
}