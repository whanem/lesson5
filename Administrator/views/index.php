<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление сайтом</title>
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>
    <p><a href="../index.php">Выйти из кабинета</a></p>
    <hr>
    <p><a href="index.php?ctrl=News&act=Add">Добавить статью</a></p>

    <?php if( $articles ) foreach( $articles as $article):?>
        <div class="article">
            <p class="article_title">
                <a href="index.php?ctrl=News&act=Upd&id=<?php echo $article->id;?>">
                    <?php echo $article->title?>
                </a>
            </p>
            <p class="edit"><a href="index.php?ctrl=News&act=Upd&id=<?php echo $article->id;?>">
                    редактировать
                </a> |
                <a href="index.php?ctrl=News&act=Del&id=<?php echo $article->id;?>">
                    удалить
                </a>
            </p>
            <p class="article_preview"><?php echo $article->article?>...</p>
        </div>
    <?php endforeach;?>
</body>
</html>