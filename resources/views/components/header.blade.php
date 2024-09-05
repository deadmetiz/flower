<header id="header">
    <a href="{{route('main-page')}}"><img class="logo" src="public/img/logo.png" alt="Lepestok logo"></a>
    <div class="search-form">
        <input class="search-form-txt" type="text" placeholder="Поиск...">
        <button class="search-form-btn"><img class="search-form-img" src="public/img/glass.png" alt="image"></button>
    </div>
    <nav>
        <ul>
            <li><a href="{{route('news')}}"><img class="cart" src="public/img/new.png" alt="news"></a></li>
            <li><a href="{{route('catalog')}}">Каталог</a></li>
            <li><a href="{{route('wishlist')}}"><img class="like" src="public/img/favorites.png" alt="like"></a></li>
            <li><a href="{{route('cart')}}"><img class="cart" src="public/img/cart.png" alt="cart"></a></li>
            @if(\Illuminate\Support\Facades\Auth::user())
                <li><a href="{{route('my_profile')}}"><img class="like" src="public/img/account.png" alt="account"></a>
                    <ul class="main">
                        <li class="exit"><a class="main-nav-link" href="{{route('logout')}}">Выход</a></li>
                    </ul>
                </li>
            @else
                <li><a href="{{route('login')}}">Вход</a></li>
            @endif
        </ul>
    </nav>
</header>

