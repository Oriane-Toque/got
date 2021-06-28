@extends('templates.master')

<!-- @dump($characterList) -->

@section('content')
    <ul class="characters-list">
        @foreach($characterList as $character)
        <li class="character-card">
            <a href="{{ @route("character", ["id" => $character->id]) }}">
                <div class="avatar" style="background: #{{$character->house[0]->colour}};">
                    <img src="{{ @url("assets/img/$character->image") }}" alt="{{$character->first_name}}">
                </div>
                <div class="name">
                    {{$character->first_name}} {{$character->last_name}}
                </div>
            </a>
        </li>
        @endforeach
    </ul>
@endsection()
