@extends('index')
@section('content')

<h1>Listings</h1>

@foreach ($listings as $listing)
    This is a listing
@endforeach    
@endsection