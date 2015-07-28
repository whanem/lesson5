<?php

class NewsController
{
    protected $lenght = 600;
    protected $path = __DIR__ . '/../views/';

    public function actionAll()
    {
        $articles = NewsModel::findAll();
        $articles = NewsModel::newsPreview($articles, $this->lenght);

        $view = new View;
        $view->articles = $articles;
        $view->display('index.php', $this->path);
    }
    public function actionOne()
    {
        $id = $_GET['id'];
        $article = NewsModel::findByPK($id);

        $view = new View;
        $view->article = $article;
        $view->display('article.php', $this->path);
    }
}