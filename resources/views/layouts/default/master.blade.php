<!DOCTYPE html>
<html lang="en">
  <head>  
    @include('layouts.default.head')

    @yield('custom-style')
  </head>
  <body>
    @include('layouts.default.nav')

    @yield('content')

    @include('layouts.default.footer')
  
    @include('layouts.default.scripts')

    @yield('custom-script')
  </body>
</html>