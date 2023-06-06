<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/img/moonlogo-related.png" type="image/png" />
<link rel="stylesheet" href="/css/logreg.css" />
<title>Залогінитись</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="login">
                <h1 class="big__text">Залогінитись</h1>
                <form action="../db/login.php" method="post" class="login__input input">
                    <input type="text" placeholder="E-mail" name="email" id="email" autocomplete="off" class="login__text text" />
                    <input type="password" placeholder="Пароль" name="pass" autocomplete="off" class="login__text text" />
                    <button type="submit" class="login__button button">Войти</button>
                </form>
                <a class="login__logreg logreg" href="/register/">Не має аккаунту?</a>
            </div>
        </div>
    </main>
    <script src="/js/style.min.js"></script>
</body>
</html>