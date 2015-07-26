<?php

class NewsAdminController
    extends NewsController
{
    protected $path = __DIR__ . '/../views/';

    public function actionAdd()
    {
        $view = new View;

        if( $_SERVER['REQUEST_METHOD'] == 'POST' ){

            $title = $_POST['title'];
            $article = $_POST['article'];

            if( !empty($title) and !empty($article) ){

                $news = new AdminNews;
                $news->Add($title, $article);
            }
            else{
                $msgErr = 'Название и содержимое должно быть заполнено';
                $view->msgErr = $msgErr;
            }
            $view->title = $title;
            $view->article = $article;
        }
        $view->display('articleAdd.php', $this->path);
    }
}