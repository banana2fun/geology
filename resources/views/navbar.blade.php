<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Geology</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @include('navbarItem', [
            'label' => 'Поиск',
            'name' => 'home',
            ])
            @include('navbarItem', [
            'label' => 'Список минералов',
            'name' => 'mineral.index',
            ])
            @if (Route::has('login'))
                @auth
                    @include('navbarItem', [
                     'label' => 'Профиль',
                     'name' => 'user.profile',
                     ])
                    @include('navbarItem', [
                     'label' => 'Выйти',
                     'name' => 'logout',
                     ])
                @else
                    @include('navbarItem', [
            'label' => 'Войти',
            'name' => 'login',
            ])
                    @include('navbarItem', [
                'label' => 'Зарегестрироваться',
                'name' => 'register',
                ])
                @endauth
            @endif
        </ul>
    </div>
</nav>