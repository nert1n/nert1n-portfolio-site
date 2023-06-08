<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/img/moonlogo-related.png" type="image/png" />
<link rel="stylesheet" href="/css/login.css" />
<title>Залогінитись</title>
</head>
<body>
    <main class="login">
        <div class="container">
            <div class="login__holder">
                <h1 class="login__name">Залогінитись</h1>
                <form action="../db/login.php" method="post" class="login__inputs inputs">
                    <input type="text" placeholder="E-mail" name="email" id="email" autocomplete="off" class="login__input input" />
                    <input type="password" placeholder="Пароль" name="pass" autocomplete="off" class="login__input input" />
                    <button type="submit" class="login__button button">Войти</button>
                </form>
                <a class="login__register" href="/register/">Не має аккаунту?</a>
            </div>
        </div>
    </main>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-01EZBTPKHC"></script>
    <script src="/js/style.min.js"></script>
</body>
</html>