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
<div id="latest-books">

</div>

@vite('resources/js/latest-books.js')

@endsection