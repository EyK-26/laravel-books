<header>
    <nav>
        @auth
        <a href="{{ route('index') }}">{{ $currentPage === 'index' ? "HOME" : "home" }}</a>
        <a href="{{ route('about') }}">{{ $currentPage === 'about-us' ? "ABOUT" : "about" }}</a>
        {{-- <a href="{{ route('admin.authors') }}">admin authors</a>
        <a href="{{ route('admin.books') }}">admin books</a> --}}

        <a href="{{ route('book.search') }}">search books</a>
        <a href="{{ route('authors.index') }}">authors</a>
        <a href="{{ route('books.index') }}">books</a>
        <a href="{{ route('admin.authors.create') }}">{{ $currentPage === 'create_author' ? "CREATE AUTHOR" : "create
            author" }}</a>
        <a href="{{ route('admin.books.create') }}">{{ $currentPage === 'create_book' ? "CREATE BOOKS" : "create
            books" }}</a>
        <a href="{{ route('books.latest') }}">Books Latest</a>
        <a href="{{ route('admin.users') }}">Users for admin</a>
        {{-- <a href="{{ route('test.array') }}">Test Array</a>
        <a href="{{ route('test.model') }}">Test Model</a> --}}
        @else
        <a href="/register">Register</a>
        <a href="/login">login</a>
        @endauth
    </nav>
</header>