@extends('index')
@section('content')

<h1>Listings</h1>

<a href="/listings/new">Add a new job</a>

@foreach ($listings as $listing)
    <div class="card">
        <div class="card-title">
            <a href="/listings/show/{{$listing->id}}"> {{$listing->listing_title}}</a>
        </div>
        <div class="card-info">
            Date posted: {{$listing->listing_date}}
        </div>
    </div>
@endforeach
@endsection