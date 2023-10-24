@extends('layouts.main', [
'currentPage' => 'search'
])
@section('content')

<h4>Search</h4>

<form action="{{ route('books.search') }}" method="get">
    <input type="text" name="search" id="search">
    <input type="submit" value="submit">
</form>

<div id="results">

</div>
@endsection