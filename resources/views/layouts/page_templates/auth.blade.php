<div class="wrapper ">
  @include('layouts.navbars.sidebar')
  <div class="main-panel">
    @include('layouts.navbars.navs.auth')
    @yield('css')
    @yield('content')
    @yield('js')
    @include('layouts.footers.auth')
  </div>
</div>