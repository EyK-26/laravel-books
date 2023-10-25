@extends('layouts.main', [
'currentPage' => 'search'
])
@section('content')

<h4>Search</h4>

<input id="search" type="text" name="search">

<div id="search-results">

</div>

@vite("resources/js/search-book.js")
@endsection