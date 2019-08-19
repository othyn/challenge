<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="w-100 h-100">
    @include ('layouts.header')

    <body class="w-100 h-100">
        @yield ('main-content')

        @include ('layouts.footer')
    </body>
</html>
