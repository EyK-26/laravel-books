@extends('layouts.main', [
'currentPage' => 'detail'
])

@section('content')

@include('common.alerts')

@if ($book->id)

<h2>{{ $book->title }}</h2>
<p>{{ $book->price }}</p>
<p>{{ $book->publication_date }}</p>
<p>{{ $book->publication_date }}</p>
<p>{{ $book->language }}</p>
<p>{{ $book->pages }}</p>
<p>{{ $book->edition }}</p>
<img src="{{ $book->image }}" alt="{{ $book->title }}">

@include('reviews.create')

@if ($reviews->count() > 0)
@foreach ($reviews as $review)
<p>{{$review->text}}</p>
<p>by {{ $review->user->name }}</p>
@endforeach

@else
<p>no reviews yet</p>
@endif

@endif
@endsection