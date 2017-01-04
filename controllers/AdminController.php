<?php

class AdminController
{
      public  function actionOne(){
          $view = new View();

          $view->display('news/insert.php');

          $title = $_POST['title'];
          $content = $_POST['content'];
          $item = News::insertOne($title, $content);


          if ($item){
              echo 'INSERT is true';
          }
    }
}