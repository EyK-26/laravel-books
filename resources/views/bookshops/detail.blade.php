@extends('layouts.main', [
'currentPage' => 'bookshop.detail'
])

@section('content')

@include('common.alerts')

@if ($bookshop->id)

<h2>{{ $bookshop->name }}</h2>
<p>Located at {{ $bookshop->city }}</p>

@endif
@endsection