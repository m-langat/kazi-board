@extends('layout')

@section('content')

<h2 class="mt-4 mb-4"> Edit Listing</h2>

@include('Listings.__form', [
    'listing' => $listing,
    'action' => route('listings.update', $listing)
])




@endsection
