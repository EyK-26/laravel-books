@extends('layouts.main', [
'currentPage' => 'login'
])
@section('content')

<div>
    Hello {{ $user->name }}
    You logged in
</div>

{{-- <h4>click to logout</h4>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button>Logout</button>
</form> --}}

@endsection