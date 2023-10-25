@extends('layouts.main', [
'currentPage' => 'authors'
])

@section('content')
@include('common.search')

@if (count($books) > 0)
@foreach ($books as $book)
<p>{{ $book->title }}</p>
<p>{{ $book->language }}</p>
<a href="{{ route('books.show', $book->id) }}">details</a>
@endforeach
{{ $books->links() }}

@endif
@endsection