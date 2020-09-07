<div class="sidebar" data-color="azure" data-background-color="white">
    <div class="logo">
      <a href="/" class="simple-text logo-mini">
        <img src="/img/logo.png" alt="">
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
      <li class="nav-item {{str_contains(request()->path(), 'dashboard') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{str_contains(request()->path(), 'categories') ? 'active' : ''}}">
            <a class="nav-link" href="{{route('category.index')}}">
              <i class="material-icons">category</i>
              <p>Categories</p>
            </a>
        </li>
        <li class="nav-item {{str_contains(request()->path(), 'lectures') ? 'active' : ''}}">
        <a class="nav-link" href="{{route('lecture.index')}}">
              <i class="material-icons">school</i>
              <p>Lectures</p>
            </a>
        </li>
        <li class="nav-item {{str_contains(request()->path(), 'banners') ? 'active' : ''}}">
          <a class="nav-link" href="{{route('banner.index')}}">
              <i class="material-icons">chrome_reader_mode</i>
              <p>Banners</p>
            </a>
        </li>
        <li class="nav-item">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              <i class="material-icons">logout</i>
              <p>Logout</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </div>
  </div>