<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="style/login.css" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>php_lvl1</title>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
<div>
    <?php if($_SESSION['isAuth']):?>
        <span class="navbar-brand">Приветствую Вас, <?=$_SESSION['user_name']?></span>
        <form action="session_destroy.php" method="post">
            <input name="logout" type="submit" class="btn btn-danger" value="Выход">
        </form>
    <?php else:?>
        <span class="navbar-brand">Для того чтобы оставлять отзывы требуется авторизация</span>
        <a href="<?=$PUBLIC_DIR?>login.php" class="btn btn-success" role="button"
           aria-pressed="true">Авторизация</a>           
        <a href="<?=$PUBLIC_DIR?>registration.php" class="btn btn-primary" role="button"
           aria-pressed="true">Регистрация</a>                      
   <?php endif;?>
</div>
</nav>
<div class="container">