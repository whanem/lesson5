<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?php echo $article->title?></title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <p><a href="index.php">...назад на главную</a></p>
    <p><a href="edit.php?id=<?php echo $article->id;?>">Редактировать статью</a> |
        <a href="delete.php?id=<?php echo $article->id;?>">Удалить статью</a></p>

    <p class="article_title"><?php echo $article->title;?></p>
    <p><?php echo $article->article;?></p>
</body>
</html>
