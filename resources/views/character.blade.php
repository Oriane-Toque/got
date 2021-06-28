@extends('templates.master')

<!-- @dump($character) -->

@section('content')
<section class="character-page">
    <div class="col-8">
        <h2>{{$character->first_name}} {{$character->last_name}}</h2>
        <div class="bio">
            <h3>Biographie</h3>
            <p>{{$character->biography}}</p>
        </div>
    </div>
    <div class="col-4">
        <div class="avatar" style="background: #{{$character->house[0]->colour}};">
            <img src="{{ @url("assets/img/$character->image") }}" alt="{{$character->first_name}}">
        </div>
        <div class="infos">
            <h3>Maisons</h3>
            <div class="houses">
                <ul>
                    @foreach($character->house as $house)
                    <li class="house-logo" style="background: #{{ $house->colour }};">
                        <a href="{{ @route("house", ["id" => $house->id]) }}">
                            <img src="{{ @url("assets/img/houses/$house->image") }}" alt="{{ $house->name }}">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <ul class="meta">
                <li><span>Rang : </span> {{$character->title->name}}</li>
                <li><span>Mère : </span>
                @if($character->mother_id !== null)
                    {{$character->mother->first_name}} {{$character->mother->last_name}}
                @else
                    Non renseigné
                @endif
                </li>
                <li><span>Père : </span>
                @if($character->father_id !== null)
                    {{$character->father->first_name}} {{$character->father->last_name}}
                @else
                    Non renseigné
                @endif
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection()
