<!DOCTYPE html>
<html lang="ua">

<head>
   <meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/img/moonlogo-related.png" type="image/png" />
<link rel="stylesheet" href="/css/style.css" />
<title>Максим Батурін - Фріланс. Фронтенд. Сайти.</title>
</head>

<body>
   <header class="header">
    <div class="container">
        <div class="header__holder">
            <div class="header__brand brand">
                <img class="brand__logo" src="/img/moonlogo-related.png" alt="Лого">
                <div class="brand__info">
                    <h1 class="brand__name">Максим Батурін</h1>
                    <p class="brand__works">Фріланс. Фронтенд. Сайти.</p>
                </div>
            </div>
            <div class="header__account account">
                <?php if($_COOKIE["user"] == ""):?>
                <a class="account__button button" href="/login/"><span>ВОЙТИ</span></a>
                <?php else: ?>
                <a class="account__button button" href="/account/"><img class="account__logo" src="/img/user.png" alt=""><span>АККАУНТ</span></a>
                <?php endif;?>
            </div>
            <div class="header__burger burger">
                <span class="burger__span"></span>
            </div>
        </div>
    </div>
</header>
   <main class="tabs">
    <div class="tabs__nav">
        <div class="container">
            <div class="tabs__holder">
                <button class="tabs__btn tabs__btn_active button">РОБОТИ</button>
                <button class="tabs__btn button">ПОСЛУГИ</button>
                <button class="tabs__btn button">ВІДГУКИ</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tabs__content">
            <div class="tabs__pane tabs__pane_show">
                <div class="tabs__info works">
                    <h1 class="works__head head">РОБОТИ</h1>
                    <?php if($_COOKIE["user"] == ""):?>
                    <?php else: ?>
                    <div class="works__add add">
                        <img class="add__img" src="/img/not-image.png" alt="#">
                        <form class="add__inputs">
                            <input class="add__input input" type="text" placeholder="Заголовок" name="head" id="head">
                            <input class="add__input input" type="text" placeholder="Підзаголовок" name="main"
                                id="main">
                            <button class="add__button button" type="button">Додати блог</button>
                        </form>
                    </div>
                    <?php endif;?>
                    <div class="works__information information">
                    </div>
                </div>
            </div>
            <div class="tabs__pane">
                <div class="tabs__info">
                    <h1 class="services__head head">ПОСЛУГИ</h1>
                </div>
            </div>
            <div class="tabs__pane id=" content-3>
                <div class="tabs__info">
                    <h1 class="reviews__head head">ВІДГУКИ</h1>
                </div>
            </div>
        </div>
    </div>
</main>
   <footer class="footer">
    <div class="container">
        <div class="footer__holder">
            <p>©2023 Батурін Максим</p>
            <p>Фріланс. Фронтенд. Сайти.</p>
        </div>
    </div>
</footer>
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-01EZBTPKHC"></script>
   <script src="/js/style.min.js"></script>
</body>

</html>