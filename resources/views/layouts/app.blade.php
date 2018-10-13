<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body>
    @yield('base')

    @include('layouts.scripts')
</body>
</html>
