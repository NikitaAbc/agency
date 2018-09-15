<div class="collapse navbar-collapse" id="navbar-collapse-1">
    <!-- main-menu -->
    <ul class="navbar-nav ml-xl-auto">
        @foreach($pages as $page)
            @if($page->route == "uslugi")
                <li class="nav-item dropdown">
                    <a href="{{ $page->route }}" class="nav-link dropdown-toggle"
                       aria-haspopup="true" aria-expanded="false">
                        {{ $page->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="{{ $page->route }}">
                        @foreach($services as $service)
                            <li><a href="{{ $service->route }}">{{ $service->title }}</a></li>
                        @endforeach
                    </ul>

                </li>
            @else
                <li class="nav-item">
                    <a href="{{ $page->route ?: url("/") }}" class="nav-link">
                        {{ $page->name }}
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</div>