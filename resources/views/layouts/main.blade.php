<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    @vite('resources/css/app.scss')
</head>

<body>
    @include('common.navigation', [$currentPage])
    @auth
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <button>Logout</button>
    </form>
    @endauth
    @yield('content')

</body>

</html>