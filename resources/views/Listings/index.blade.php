@extends('index')
@section('content')

<h1>Listings</h1>

@foreach ($listings as $listing)
    <p>{{$listing->listing_title}}</p>
@endforeach    
@endsection