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
            <div class="header__info">
                <div class="header__brand brand">
                    <img class="brand__logo" src="/img/moonlogo-related.png" alt="Лого" width="50px" height="50px">
                    <div class="brand__info">
                        <h1>Максим Батурін</h1>
                        <p>Фріланс. Фронтенд. Сайти.</p>
                    </div>
                </div>
                <div class="header__sochial sochial">
                    <a class="sochial__link" href="#"><img src="/img/moonlogo-related.png" alt="FreeLance" width="30px"
                            height="30px"></a>
                    <a class="sochial__link" href="#"><img src="/img/moonlogo-related.png" alt="FreeLance" width="30px"
                            height="30px"></a>
                    <a class="sochial__link" href="#"><img src="/img/moonlogo-related.png" alt="FreeLance" width="30px"
                            height="30px"></a>
                </div>
                <div class="header__account account">
                    <?php 
                    if($_COOKIE["user"] == ""):
                    ?>
                    <a class="account__link" href="/login/"><span>ВОЙТИ</span></a>
                    <?php else: ?>
                    <a class="account__link" href="/account/"><img class="account__logo" src="/img/user.png" alt=""
                            width="35px" height="35px"><span>АККАУНТ</span></a>
                    <?php endif;?>
                </div>
                <div class="header__burger burger">
                    <span class="burger__span"></span>
                </div>
            </div>
        </div>
    </div>
</header>
   <main>
    <div class="tabs">
        <div class="tabs__nav">
            <div class="container">
                <div class="tabs__holder">
                    <button class="tabs__btn tabs__btn_active">ПОРТФОЛІО</button>
                    <button class="tabs__btn">РОБОТИ</button>
                    <button class="tabs__btn">ПОСЛУГИ</button>
                    <button class="tabs__btn">ВІДГУКИ</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tabs__content">
                <div class="tabs__pane tabs__pane_show">
                    <h1>ПОРТФОЛІО</h1>
                </div>
                <div class="tabs__pane">
                    <h1>РОБОТИ</h1>
                </div>
                <div class="tabs__pane" id="content-3">
                    <h1>ПОСЛУГИ</h1>
                </div>
                <div class="tabs__pane">
                    <h1>ВІДГУКИ</h1>
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
   <script src="/js/style.min.js"></script>
</body>

</html>