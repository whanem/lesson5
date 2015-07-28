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
        <label for="title">
            <p>Название статьи:</p></label>
        <textarea name="title" id="title" cols="90" rows="2"><?php echo $title?></textarea>
        <label for="art">
            <p>Содержимое статьи:</p></label>
        <textarea name="article" id="art" cols="90" rows="20"><?php echo $article?></textarea>
        <p><input type="submit"/></p>
    </form>
</body>
</html>