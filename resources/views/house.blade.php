@extends('templates.master')

<!-- @dump($house) -->

@section('content')

<h2>Maison {{$house->name}}</h2>

<ul class="characters-list">

    @foreach($house->character as $character)
    <li class="character-card">
        <a href="{{ @url("/character/{$character->id}")}}">

            <div class="avatar" style="background: #{{$house->colour}};">
                <img src="{{ @url("assets/img/{$character->image}") }}" alt="{{$character->first_name}}">
            </div>
            <div class="name">
                {{$character->first_name}} {{$character->last_name}}
            </div>
        </a>
    </li>
    @endforeach
</ul>

@endsection
