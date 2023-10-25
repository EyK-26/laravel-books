@extends('layouts.main', [
'currentPage' => 'create_book'
])
@section('content')
@if($book->id)
<h1>Edit details</h1>
@else
<h1>Enter details</h1>
@endif
@if ($book->id)
<form action="{{ route('admin.books.update', $book->id) }}" method="post">
    @method('PUT')
    @else
    <form action="{{ route('admin.books.store') }}" method="post">
        @endif
        @csrf
        <input type="text" name="title">
        <input type="text" name="language">
        <button type="submit">add book</button>
    </form>
    @endsection