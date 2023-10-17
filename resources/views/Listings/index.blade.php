@extends('index')
@section('content')

<h1>Listings</h1>

<a href="/listings/new">Add a new job</a>

<div class="listings">

    @foreach ($listings as $listing)
    <div class="listing">
        <a href="listings/{{$listing->id}}">{{$listing->listing_title}}</a>
    </div>
        
    @endforeach    
</div>
@endsection