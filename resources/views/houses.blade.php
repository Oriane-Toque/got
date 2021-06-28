@extends('templates.master')

<!-- @dump($houseList) -->

@section('content')

<ul class="houses-list">
    @foreach($houseList as $house)
    <li class="house-logo" style="background: #{{$house->colour}};">
        <a href="{{ @url("/house/{$house->id}")}}">
            <img src="../assets/img/houses/{{$house->image}}" alt="{{$house->name}}">
        </a>
    </li>
    @endforeach
</ul>

@endsection
