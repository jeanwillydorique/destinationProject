
@extends('layouts.base')

@section('content')



    @foreach ($users as $user)
        

    <div class="cards">

        <div class="name">
        <p>{{ $user->name}}</p>
        </div>

        <div class="avatar">
        <img src="{{$user->avatar}}" alt="">
        </div>

        <div class="infos">
            <p>{{ $user->type}}</p>
            <p>{{ $user->content}}</p>
            <p>ATK : {{ $user->ATK}} / DEF : {{ $user->DEF}} </p>
        </div>


    </div>

    @endforeach



@endsection
