<!doctype html>
<html lang="en">
<head>

  @include('frontend.partials.header')

</head>
<body>

@include('frontend.partials.menu.top')
@include('frontend.partials.menu.main')
@include('frontend.partials.menu.mega')

@yield('heading')

@include('frontend.partials.alert')

<div style="padding-top: 60px;">
  @yield('content')
</div>

@include('frontend.partials.footer')

@include('frontend.partials.scripts')
</body>
</html>
