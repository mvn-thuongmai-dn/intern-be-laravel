<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body>
    <header class="page-header">
        @include('includes.header')
    </header>
    <main class="page-main">
        @yield('content')
    </main>
    @include('includes.footer')
</body>
</html>
