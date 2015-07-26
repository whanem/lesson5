<?php
require __DIR__ . '/models/sqlQuery.php';

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
    $title = $_POST['title'];
    $article = $_POST['article'];

    if ($title and $article) {
        $sql_query = article_sql_add( $title, $article );

        if( $sql_query )
            $msg_error = 'Статья успешно добавлена';
        else
            $msg_error = 'Ошибка! Статья не может быть добавлена';
    }
    else
        $msg_error = 'Статья не добавлена! НАЗВАНИЕ и СОДЕРЖИМОЕ должно быть заполнено';
}

require __DIR__ . '/views/ArticleAdd.php';