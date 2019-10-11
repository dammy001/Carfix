@extends('layouts.app')

@section('title')
    Carfix | Search Results
@endsection

@section('content')
<br><br><br><br><br>
    <div class="container">
        @if(isset($details))
            <p>The search results for your query {{ $query }} are: </p>
            @foreach($details as $user)
            <h3>{{ $user->name}}</h3>
            <h3>{{ $user->email}}</h3>
            @endforeach
        @endif
    </div>

@endsection
