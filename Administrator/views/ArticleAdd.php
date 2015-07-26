<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить статью</title>
    <link rel="stylesheet" href="view/css/style.css"/>
</head>
<body>
    <p><a href="../administrator/index.php">...назад на главную</a></p>
    <h2>Добавить статью</h2>
    <p class="msgErr"><?php echo $msgErr;?></p>
    <form action="../administrator/index.php?ctrl=News&act=Add" method="POST">
        <p>Название статьи:</p>
        <textarea name="title" id="text" cols="90" rows="2"><?php echo $title?></textarea>
        <p>Содержимое статьи:</p>
        <textarea name="article" id="" cols="90" rows="20"><?php echo $article?></textarea>
        <p><input type="submit"/></p>
    </form>
</body>
</html>