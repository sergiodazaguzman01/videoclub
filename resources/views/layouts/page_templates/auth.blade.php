<!-- este es el que nos controla todo el diseño cuando un usuario esta logueado -->
<div class="wrapper ">
  {{-- cuando inicia sesion el incluye el menu izquierdo del usuario loguead --}}
  @include('layouts.navbars.sidebar')
  <div class="main-panel">
    {{-- tambien incluye el menu del usuario logueado que esta --}}
    @include('layouts.navbars.navs.auth')
    @yield('content')
    {{-- tambien incluye el footer del usuario logueado --}}
    @include('layouts.footers.auth')
  </div>
</div>