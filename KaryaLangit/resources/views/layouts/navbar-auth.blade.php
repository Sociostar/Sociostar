<nav class="white">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo"><img src="{{asset('images/logo.png')}}" alt=""></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse black-text"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a href="{{route('blog.index')}}" class="blue-text">Blog</a></li>
      <li><a href="{{ route('logout') }}" class="blue-text"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          Logout
      </a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li><a href="{{route('blog.index')}}">Blog</a></li>
      <li><a href="{{ route('logout') }}"
          onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
          Logout
      </a></li>
      </ul>
    </div>
  </nav>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
