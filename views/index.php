<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Сайт новостей</title>
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>
    <p><a href="administrator/index.php">Кабинет администратора</a></p>
    <?php if( $articles ) foreach( $articles as $article):?>
    <div class="article">
        <p class="article_title">
            <a href="<?php echo 'index.php?ctrl=News&act=One&id=' . $article->id;?>"><?php echo $article->title?></a>
        </p>

        <p class="article_preview">
            <?php echo $article->article?>
            <a href="<?php echo 'index.php?ctrl=News&act=One&id=' . $article->id;?>">... читать далее</a>
        </p>
    </div>
    <?php endforeach;?>
</body>
</html>