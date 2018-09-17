<div class="collapse navbar-collapse" id="navbar-collapse-1">
    <!-- main-menu -->
    <ul class="navbar-nav ml-xl-auto">
        @foreach($pages as $page)
            @if($page->route == "uslugi")
                <li class="nav-item dropdown">
                    <a href="{{ $page->route }}" id="{{ $page->route  }}"  class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                        {{ $page->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="{{ $page->route }}">
                        @foreach($services as $service)
                        <a class="dropdown-item" href="{{ $service->route }}">{{ $service->title }}</a>
                        @endforeach
                    </div>
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