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


@if ($book->bookshops->count() > 0)

<p>You can find them at</p>
@foreach ($book->bookshops as $shop)
<a href="{{ route('bookshops.show', $shop->id) }}">{{ $shop->name }} located at {{ $shop->city }}</a>
<br>
@endforeach

@else
<p>Not in store yet</p>
@endif




@include('reviews.create')

@if ($reviews->count() > 0)
@foreach ($reviews as $review)
<p>{{$review->text}}</p>
<p>by {{ $review->user->name }}</p>

@can('admin')
<form action="{{ route('reviews.destroy', $review->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">delete review</button>
</form>
@endcan

@cannot('admin')
<p>please contact your admin to delete your review</p>
@endcannot

@endforeach

@else
<p>no reviews yet</p>
@endif

@endif
@endsection