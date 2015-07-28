<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование статьи</title>
    <link rel="stylesheet" href="views/css/style.css"/>
</head>
<body>
    <p><a href="../administrator/index.php">...назад на главную</a></p>
    <h2>Редактор</h2>
    <p class="msgErr"><?php echo $msgErr;?></p>

    <form action="../administrator/index.php?ctrl=News&act=Upd" method="POST">
        <p>Название статьи:</p>
        <textarea name="title" cols="90" rows="2"><?php echo $article->title;?></textarea>
        <p>Содержимое статьи:</p>
        <textarea name="article" cols="90" rows="20"><?php echo $article->article;?></textarea>
        <input type="hidden" name="id" value="<?php echo $article->id;?>">
        <p><input type="submit" value="Сохранить"/></p>
    </form>
</body>
</html>