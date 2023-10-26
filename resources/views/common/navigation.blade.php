<header>
    <nav>
        <a href="{{ route('index') }}">{{ $currentPage === 'index' ? "HOME" : "home" }}</a>
        <a href="{{ route('books.index') }}">books</a>
        @auth
        <a href="{{ route('books.latest') }}">Books Latest</a>
        @else
        <a href="/register">Register</a>
        <a href="/login">login</a>
        @endauth

        @can('admin')
        <a href="{{ route('admin.users') }}">Users for admin</a>
        <a href="{{ route('admin.authors.create') }}">{{ $currentPage === 'create_author' ? "CREATE AUTHOR" : "create
            author" }}</a>
        <a href="{{ route('admin.books.create') }}">{{ $currentPage === 'create_book' ? "CREATE BOOKS" : "create
            books" }}</a>
        @endcan

        <a href="{{ route('authors.index') }}">authors</a>
        <a href="{{ route('book.search') }}">search books</a>
        <a href="{{ route('about') }}">{{ $currentPage === 'about-us' ? "ABOUT" : "about" }}</a>
    </nav>
</header>