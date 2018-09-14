<aside id="left-panel">

        <!-- User info -->
        <div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it -->
                    <a href="{{ url("/") }}"> <span class="menu-item-parent">К сайту</span></a>
				</span>
        </div>
        <!-- end user info -->

        <nav>

            <ul>
                <li>
                    <a href="{{ url("admin") }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Главная</span></a>

                </li>
                <li>
                    <a href="{{ route("admin.pages.index") }}"><i class="fa fa-lg fa-images txt-color-blue"></i> <span class="menu-item-parent">Страницы</span></a>
                </li>

                <li>
                    <a href="{{ route("admin.articles.index") }}"><i class="fa fa-lg fa-info txt-color-blue"></i>  <span class="menu-item-parent">Статьи</span></a>
                </li>

                <li>
                    <a href="{{ route("admin.services.index") }}"><i class="fa fa-lg fa-images txt-color-blue"></i> <span class="menu-item-parent">Услуги</span></a>
                </li>

                <li>
                    <a href="{{ route("admin.slides.index") }}"><i class="fa fa-lg fa-images txt-color-blue"></i>  <span class="menu-item-parent">Слайды</span></a>
                </li>

                <li class="top-menu-invisible">
                    <a href="{{ route("admin.contacts.index") }}"><i class="fa fa-lg fa-images txt-color-blue"></i> <span class="menu-item-parent">Контакты</span></a>
                </li>

                <!---
                <li >
                    <a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span></a>
                    <ul style="display:block;">
                        <li>
                            <a href="projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
                        </li>
                        <li>
                            <a href="blog.html"><i class="fa fa-paragraph"></i> Blog</a>
                        </li>
                        <li>
                            <a href="gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-comments"></i> Forum Layout</a>
                            <ul>
                                <li><a href="forum.html">General View</a></li>
                                <li><a href="forum-topic.html">Topic View</a></li>
                                <li><a href="forum-post.html">Post View</a></li>
                            </ul>
                        </li>
                        <li class="active">
                            <a href="profile.html"><i class="fa fa-group"></i> Profile</a>
                        </li>
                        <li>
                            <a href="timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
                        </li>
                        <li>
                            <a href="search.html"><i class="fa fa-search"></i>  Search Page</a>
                        </li>
                    </ul>
                </li>
                --->


            </ul>
        </nav>


        <span class="minifyme" data-action="minifyMenu">
				<i class="fa fa-arrow-circle-left hit"></i>
			</span>

    </aside>
