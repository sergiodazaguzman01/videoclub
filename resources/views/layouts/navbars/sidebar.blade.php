<!-- Aca se maneja el menu Izquierdo cuando un usuario esta logueado -->
<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Menu') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Shop') }}</p>
        </a>
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Usuarios') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'peliculas' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('peliculas.index') }}">
          <i class="material-icons">Peliculas</i>
          <p>{{ __('Peliculas') }}</p>
        </a>
      </li>


      <li class="nav-item{{ $activePage == 'Reserva' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('alquilers.index') }}">
          <i class="material-icons">Reserva</i>
          <p>{{ __('Alquiler') }}</p>
        </a>
      </li>
{{--
      <li class="nav-item{{ $activePage == 'shop' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">notifications</i>
          <p>{{ __('Shop') }}</p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
      <a class="nav-link" href="#">
        <i class="material-icons">notifications</i>
        <p>{{ __('Notifications') }}</p>
      </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li> --}}

    </ul>
  </div>
</div>