@extends('index')

@section('contet')
    <div>
        <a href="listings/{{$listing->id}}">{{$listing->listing_title}}</a>

        <p>{{$listing->description}}</p>
    </div>
@endsection