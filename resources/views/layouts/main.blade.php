<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>

<body>
    @include('common.navigation', [$currentPage])
    @yield('content')
    @vite('resources/css/app.scss')
</body>

</html>