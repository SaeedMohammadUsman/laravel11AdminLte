<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}" dir="{{ $direction ?? 'ltr' }}">

  <head>
    @include('layouts.partials.head')
  </head>
 <body class="hold-transition sidebar-mini layout-fixed {{ $direction === 'rtl' ? 'rtl' : '' }}">

    <div class="wrapper">
      <!-- Navbar -->
      @include('layouts.partials.nav-top')
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      @include('layouts.partials.side-nav')

      <!-- Content Wrapper. Contains page content -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <main class="py-4">
          @yield('content')
        </main>
      </div>

      @include('layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

    @include('layouts.partials.scripts')
  </body>
</html>
