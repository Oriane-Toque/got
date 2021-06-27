@extends('templates.master')

<!-- @dump($characterList) -->

@section('content')
    <ul class="characters-list">
        @foreach($characterList as $character)
        <li class="character-card">
            <a href="/character/{{$character->id}}">

                <div class="avatar" style="background: #e3e3e3;">
                    <img src="assets/img/{{$character->image}}" alt="{{$character->first_name}}">
                </div>
                <div class="name">
                    {{$character->first_name}} {{$character->last_name}}
                </div>
            </a>
        </li>
        @endforeach
    </ul>
@endsection()
