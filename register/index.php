<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/img/moonlogo-related.png" type="image/png" />
<link rel="stylesheet" href="/css/logreg.css" />
<title>Регістрація аккаунту</title>
</head>
<body>
    <main>
        <div class="container">
            <div class="register">
                <h1 class="big__text">Зареєструватись</h1>
                <form action="../db/register.php" method="post" class="register__input input">
                     <input type="text" placeholder="Ім'я" name="login" autocomplete="off" class="input__text text" />
                     <input type="text" placeholder="E-mail" name="email" id="email" autocomplete="off" class="input__text text" />
                     <input type="text" placeholder="Пароль" name="pass" autocomplete="off" class="input__text text" />
                     <input type="text" placeholder="Пароль ще раз" autocomplete="off" name="repeatpass" class="input__text text" />
                     <button type="submit" class="register__button button">Зареєструватись</button>
                  </form>
                <a class="logreg" href="/login/">Є аккаунт?</a>
            </div>
        </div>
    </main>
    <script src="/js/style.min.js"></script>
</body>
</html>