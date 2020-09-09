<div class="container-fluid">
    <nav class="custom-navbar">
        <div class="logo">
            <a href="/">
                <img src="/img/logo.png" alt="logo" class="w-1/5">
            </a>
        </div>
        <ul class="links">
            <li><a href="/">Академии</a></li>
            <li><a href="/">Вебинари</a></li>
            <li><a href="/">Тест за кариера</a></li>
            <li><a href="/">Блог</a></li>
        </ul>
        <div class="nav-button">
            @guest
                <button class="button mainButton" data-toggle="modal" data-target="#emailModal" data-backdrop="static">
                    Пријави се
                </button>
            @else
            <div class="dropdown">
                <button class="btn mainButton dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{auth()->user()->name}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a>
                    <a class="dropdown-item" href="{{route('category.index')}}">Categories</a>
                    <a class="dropdown-item" href="{{route('lecture.index')}}">Lectures</a>
                    <a class="dropdown-item" href="{{route('banner.index')}}">Banners</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                            document.querySelector('.logout-form').submit();">Logout</a>
                    <form class="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </div>
            @endguest
           </div>
    </nav>
    <div class="nav-mobile">
        <ul class="navbar-links">
            <li>
                <a href="">
                    <i class="fa fa-leanpub"></i><br>
                    <p class="text-small">Академии</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-weixin"></i>
                    <p class="text-small">Вебинари</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-briefcase"></i>
                    <p class="text-small">Кариера</p>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-th-large"></i>
                    <p class="text-small">Блог</p>
                </a>
            </li>
            <li>
                @guest
                    <a href="" data-toggle="modal" data-target="#emailModal" data-backdrop="static">
                        <i class="fa fa-user-plus"></i>
                        <p class="text-small">Пријави се</p>
                    </a>
                @else
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.querySelector('.logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <p class="text-small">Одјави се</p>
                </a>
                    <form class="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                @endguest
            </li>
        </ul>
    </div>
</div>
