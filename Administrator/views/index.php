<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Управление сайтом</title>
    <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <p><a href="../index.php">Выйти из кабинета</a></p>
    <hr>
    <p><a href="index.php?ctrl=News&act=Add">Добавить статью</a></p>

    <?php if( $articles ) foreach( $articles as $article):?>
        <div class="article">
            <p class="article_title"><a href="<?php echo 'article.php?id=' . $article->id;?>"><?php echo $article->title?></a></p>
            <p class="article_preview"><?php echo $article->article?>... <a href="<?php echo 'article.php?id=' . $article->id;?>"> читать далее</a></p>
        </div>
    <?php endforeach;?>
</body>
</html>