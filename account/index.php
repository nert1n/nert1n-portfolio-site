<?php
require_once('../db/loader.php');
?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/img/moonlogo-related.png" type="image/png" />
<link rel="stylesheet" href="/css/account.css" />
<title>Аккаунт</title>
</head>
<body>
    <main class="main">
        <div class="container">
            <div class="main__holder">
            <?php 
                if($_COOKIE["user"] == ""):
            ?>
                <h1>ВИ НЕ ЗАРЕЕСТРОВАНІ!</h1>
            <?php else: ?>
                <h1 class="main__account">Аккаунт пользователя&nbsp;<span><?= $_COOKIE["user"]?></span></h1>
                <div class="main__content">
                    <div class="main__info">
                        <p>Имя: <span><?php echo $login; ?></p>
                        <p>Емаил: <span><?php echo $email; ?></p>
                        <a class="main__exit" href="/db/exit.php">Выйти</a>
                    </div>
                </div>
            <?php endif;?>
            </div>
        </div>
    </main>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-01EZBTPKHC"></script>
    <script src="/js/style.min.js"></script>
</body>
</html>