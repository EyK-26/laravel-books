@extends('layouts.main', [
'currentPage' => 'index'
])
@section('content')
@auth
@isset($user)
<h3>{{ "Welcome {$user->name}" }}</h3>
@endisset
@endauth

<h1>Some Title</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit consequuntur eveniet.</p>

{{-- @foreach ($crime_books as $book)
<div class="book">
    <h3>{{ $book->title }}</h3>
    <p>{{ $book->authors->pluck('name')->join(', ') }}</p>
</div>
@endforeach --}}

@auth
<div id="latest-books"></div>
@endauth

@guest
<p>please log in to download the books</p>
@endguest

<div id="partners"></div>

@viteReactRefresh

@auth
@vite('resources/js/latest-books.js')
@endauth

@vite('resources/js/partners.jsx')
@endsection