<aside id="left-panel">

        <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->
                    <a href="{{ url("/") }}"> <span class="menu-item-parent">К сайту</span></a>
				</span>
        </div>
        <nav>

            <ul>
                <li>
                    <a href="{{ url("admin") }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Главная</span></a>

                </li>
                <li>
                    <a href="{{ route("admin.pages.index") }}"><i class="fa fa-lg fa-tasks"></i> <span class="menu-item-parent">Страницы</span></a>
                </li>

                <li>
                    <a href="{{ route("admin.articles.index") }}"><i class="fa fa-lg fa-info"></i>  <span class="menu-item-parent">Статьи</span></a>
                </li>

                <li>
                    <a href="{{ route("admin.services.index") }}"><i class="fa fa-lg fa-book"></i> <span class="menu-item-parent">Услуги</span></a>
                </li>

                <li>
                    <a href="{{ route("admin.slides.index") }}"><i class="fa fa-lg fa-hdd-o"></i>  <span class="menu-item-parent">Слайды</span></a>
                </li>

                <li class="top-menu-invisible">
                    <a href="{{ route("admin.contacts.index") }}"><i class="fa fa-lg fa-user"></i> <span class="menu-item-parent">Контакты</span></a>
                </li>

            </ul>
        </nav>


        <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
        </span>

</aside>
