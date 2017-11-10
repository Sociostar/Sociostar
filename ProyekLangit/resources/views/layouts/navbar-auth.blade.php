<nav>
    <div class="nav-wrapper blue">
      <a href="#!" class="brand-logo">Proyek Langit</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="badges.html">Katalog</a></li>
        <li><a href="collapsible.html">Kampanye</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Pengaturan<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="badges.html">Katalog</a></li>
        <li><a href="collapsible.html">Kampanye</a></li>
      </ul>
    </div>
  </nav>
  <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="{{route('profile.edit')}}"><i class="material-icons right">person</i>Profil</a></li>
  <li>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Keluar  <i class="material-icons right">exit_to_app</i>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
  </li>
</ul>
