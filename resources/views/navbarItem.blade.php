<li class="nav-item {{Route::currentRouteName() == $name ? 'active' : ''}}">
    <a class="nav-link" href="{{route($name)}}">
        {{$label}}
    </a>
</li>