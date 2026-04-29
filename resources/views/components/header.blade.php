<header class="header">
    <div class="header__banner">
        <img src="/images/header-top-bg.png" alt="Banner">
    </div>
    <div class="header__top">
        <div class="header-logo-block">
            <img src="/images/logo.svg" alt="Logo">
        </div>

        <div class="header__top-text">
            <div class="header__top-title">Казахстан</div>
            <div class="header__top-subtitle">улица Тестовая 1</div>
        </div>

        <x-dropdown />

        <div class="header__top-right-side">
            <x-social-media />
            <button class="header-btn">Мне пришёл билет</button>
        </div>
    </div>
    <div class="header__menu">
        <x-menu />

        <button class="header-btn">Войти</button>
        <button class="header-btn">Написать отзыв</button>
    </div>
    <div class="header__filter">
        <x-filter-days />
    </div>
</header>
