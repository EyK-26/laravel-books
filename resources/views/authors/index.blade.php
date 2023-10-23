@extends('layouts.main', [
'currentPage' => 'authors'
])

@section('content')
@if (count($authors) > 0)
@foreach ($authors as $author)
<p>{{ $author->name }}</p>
@endforeach
{{ $authors->links() }}

@endif
@endsection