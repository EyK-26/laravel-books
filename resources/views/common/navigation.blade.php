<header>
    <nav>
        <a href="{{ route('home') }}">{{ $currentPage === 'index' ? "HOME" : "home" }}</a>
        <a href="{{ route('about') }}">{{ $currentPage === 'about-us' ? "ABOUT" : "about" }}</a>
        <a href="{{ route('admin.authors') }}">{{ $currentPage === 'authors' ? "ADMIN AUTHORS" : "admin authors" }}</a>
        <a href="{{ route('admin.books') }}">ADMIN BOOKS</a>
        <a href="{{ route('authors.index') }}">authors</a>
        <a href="{{ route('books.index') }}">books</a>
        <a href="{{ route('admin.authors.create') }}">create author</a>
        <a href="{{ route('admin.books.create') }}">create author</a>
    </nav>
</header>