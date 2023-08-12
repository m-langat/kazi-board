@extends('index')

@section('content')
    <H2>{{$listing->listing_title}}</H2>
    <p>{{$listing->listing_description}}</p>
    <p>Date Listed: {{$listing->listing_date}}  Listing expiry: {{$listing->listing_expiry_date}}</p>

@endsection