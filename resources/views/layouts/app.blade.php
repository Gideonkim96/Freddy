<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @hasSection('head')
    @else
        <title>@yield('title', 'Kemnet Technologies Limited')</title>
    @endif
    @yield('head')
</head>
<body>
    @yield('content')
</body>
</html>
