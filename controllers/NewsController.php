<?php

class NewsController
{
    protected $lenght = 600;
    protected $path = __DIR__ . '/../views/';

    public function actionAll(){

        $articles = News::getAll();
        $articles = News::newsPreview($articles, $this->lenght);

        $view = new View;
/*
        foreach($view as $k => $v){
            var_dump($k . ' = ' . $v  . '<br>');
        }
*/
        $view->articles = $articles;
        $view->display('index.php', $this->path);
    }
    public function actionOne(){
        $id = $_GET['id'];
        $article = News::getOne($id);

        $view = new View;
        $view->article = $article;
        $view->display('article.php', $this->path);
    }
}