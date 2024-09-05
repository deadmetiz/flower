<footer class="footer">
    <div class="container grid grid--footer">
        <div class="logo-col">
            <a href="{{route('main-page')}}" class="footer-logo">
                <img class="logo" src="public/img/logo.png" alt="Lepestok logo">
            </a>
            <p class="copyright">
                Лепесток © 2022. Все права защищены.
            </p>
        </div>
        <div class="address-col">
            <p class="footer-heading">О нас</p>
            <address class="contacts">
                <p class="address"> Москва</p>
                <p>
                    <a href="tel:415-201-6370">+79374652419</a>
                    <br>
                    <a href="mailto:hello@omnifood.com">lepestok@mail.ru</a>
                </p>
            </address>
        </div>

        <div class="nav-col">
            <p class="footer-heading">Каталог</p>
            <ul class="footer-nav">
                <li><a href="#">Акции</a></li>
                <li><a href="#">Хиты</a></li>
                <li><a href="#">Букеты</a></li>
            </ul>
        </div>
        <div class="nav-col">
            <p class="footer-heading">Аккаунт</p>
            <ul class="footer-nav">
                @if(\Illuminate\Support\Facades\Auth::user())
                    <li><a href="{{route('logout')}}">Выйти</a></li>
                @else
                    <li><a href="{{route('login')}}">Создать аккаунт</a></li>
                    <li><a href="{{route('login')}}">Вход в личный кабинет</a></li>
                    @endif
            </ul>
        </div>
    </div>
</footer>
