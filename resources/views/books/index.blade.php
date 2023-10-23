@extends('layouts.main', [
'currentPage' => 'authors'
])

@section('content')
@if (count($books) > 0)
@foreach ($books as $book)
<p>{{ $book->title }}</p>
<p>{{ $book->language }}</p>
@endforeach
{{ $books->links() }}

@endif
@endsection