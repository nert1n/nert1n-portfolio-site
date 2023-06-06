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
    <main>
        <div class="container">
            <div class="main__holder">
            <?php 
                if($_COOKIE["user"] == ""):
            ?>
                <h1>ВИ НЕ ЗАРЕЕСТРОВАНІ!</h1>
            <?php else: ?>
                <a class="user__login" href="/db/exit.php">Выйти</a>
            <?php endif;?>
            </div>
        </div>
    </main>
    <script src="/js/style.min.js"></script>
</body>
</html>