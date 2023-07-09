@extends('index')
@section('content')

<h1>Listings</h1>

<a href="/listings/new">Add a new job</a>

@foreach ($listings as $listing)
    <p>{{$listing->listing_title}}</p>
@endforeach    
@endsection