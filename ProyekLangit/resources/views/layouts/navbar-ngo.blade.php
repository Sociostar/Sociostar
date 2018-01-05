<nav>
  <div class="nav-wrapper white">
    <a href="{{route('home')}}" class="brand-logo"><img src="{{asset('img/landingpage/nav_logo.png')}}" style="margin: 10px"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-button black-text" href="#!" data-activates="katalog">Katalog</a></li>
      <li><a class="dropdown-button black-text" href="#!" data-activates="kampamye">Kampanye</a></li>
      <li><a class="dropdown-button black-text" href="#!" data-activates="transaction">Transaksi</a></li>
      <li><a class="dropdown-button black-text" href="#!" data-activates="pengaturan">Pengaturan<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="badges.html">Katalog</a></li>
      <li><a href="collapsible.html">Kampanye</a></li>
    </ul>
  </div>
</nav>
<!-- Dropdown Pengaturan -->
<ul id="pengaturan" class="dropdown-content">
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
<!-- Dropdown Kampanye -->
<ul id="kampamye" class="dropdown-content">
  <li><a href="{{route('campaign.self')}}">Kampanye saya</a></li>
  <li><a href="{{route('campaign.index')}}">Lihat kampanye</a></li>
</ul>
<!-- Dropdown Katalog -->
<ul id="katalog" class="dropdown-content">
  <li><a href="{{route('item.self')}}">Katalog saya</a></li>
  <li><a href="{{route('item.index')}}">Lihat katalog</a></li>
</ul>
<!-- Dropdown Transaksi -->
<ul id="transaction" class="dropdown-content">
  <li><a href="{{route('transaction.self')}}">Konfirmasi</a></li>
  <li><a href="{{route('transaction.history')}}">Histori</a></li>
</ul>
