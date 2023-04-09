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
<?php require 'src/Views/header.php'?>
<h1>Список пользователей:</h1>
<ul>
    <?php foreach ($data['users'] as $user): ?>
        <li>
            <?=$user->nme?>

            <?php
            switch($user->role) {

                case 2:
                    echo " - Специалист";
                    break;
                case 3:
                    echo " - Клиент";
                    break;
            }?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>