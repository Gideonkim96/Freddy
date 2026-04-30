<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @hasSection('head')
    @else
        <title>@yield('title', 'Kemnet Technologies Limited')</title>
    @endif
    {!! preg_replace(
        "/\\s*@(extends\\(['\"][^'\"]+['\"]\\)|section\\(['\"](?:head|title|content)['\"](?:\\s*,\\s*[^\\)]*)?\\)|endsection|verbatim|endverbatim)\\s*/",
        '',
        $__env->yieldContent('head')
    ) !!}
</head>
<body>
    {!! preg_replace(
        "/\\s*@(extends\\(['\"][^'\"]+['\"]\\)|section\\(['\"](?:head|title|content)['\"](?:\\s*,\\s*[^\\)]*)?\\)|endsection|verbatim|endverbatim)\\s*/",
        '',
        $__env->yieldContent('content')
    ) !!}
</body>
</html>
