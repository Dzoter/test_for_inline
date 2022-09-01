<?php
/* @var array $comments */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="GET" action="index.php">
    <p>Поиск по вхождению в строку</p>
    <label>
        <input type="text" name="likeSearch" required="required">
    </label>
    <button type="submit">Найти</button>
</form>
<form method="GET" action="index.php">
    <p>Полнотекстовый поиск</p>
    <label>
        <input type="text" name="fullTextSearch" required="required">
    </label>
    <button type="submit">Найти</button>
</form>
<?php if ($comments):?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">пост id</th>
        <th scope="col">имя</th>
        <th scope="col">почта</th>
        <th scope="col">комментарий</th>

    </tr>
    </thead>


    <?php
    foreach ($comments as $comment): ?>

    <tr>
        <td><?= $comment['id']?></td>
        <td><?= $comment['post_id'] ?></td>
        <td><?= $comment['name'] ?></td>
        <td><?= $comment['email'] ?></td>
        <td><?= $comment['body'] ?></td>

    </tr>

    <?php
    endforeach; ?>
</table>
<?php endif;?>
</body>
</html>