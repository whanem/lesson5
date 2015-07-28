<?php

class NewsAdminController
    extends NewsController
{
    protected $path = __DIR__ . '/../views/';

    public function actionAdd()
    {
        $view = new View;

        if( $_SERVER['REQUEST_METHOD'] == 'POST' )
        {
            $title = $_POST['title'];
            $article = $_POST['article'];

            if( !empty($title) and !empty($article) )
            {
                $newsAdd = new AdminNews;
                $newsAdd->title = $title;
                $newsAdd->article = $article;

                $newsAdd->insert();
            }else
            {
                $msgErr = 'Название и содержимое должно быть заполнено';
                $view->msgErr = $msgErr;
            }
            $view->title = $title;
            $view->article = $article;
        }
        $view->display('articleAdd.php', $this->path);
    }

    public function actionUpd()
    {
        $view = new View();
        $newsUpd = new AdminNews();
        $id = isset($_GET['id']) ? $_GET['id'] : $_POST['id'];

        if( $_SERVER['REQUEST_METHOD'] == 'POST' )
        {
            //$id = $_POST['id'];
            $title = $_POST['title'];
            $article = $_POST['article'];

            if( !empty($title) or !empty($article) )
            {
                $newsUpd->id = $id;
                $newsUpd->title = $title;
                $newsUpd->article = $article;

                $newsUpd->update();
            }
        }
        $article = $newsUpd->findByPK($id);

        $view->article = $article;
        $view->display('edit.php', $this->path);
    }

    public function actionDel()
    {
        $newsDel = new AdminNews();
        $newsDel->id = $_GET['id'];
        $newsDel->delete();
        header('Location: index.php');
    }
}