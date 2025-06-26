@extends('layout')

@section('content')

<h2 class="mt-4 mb-4"> Job Listings</h2>

<div class="card p-5">
    <div class="card-title">
        <h3>Edit Listing</h3>
    </div>
    @include('Listings.__form', [
        'listing' => $listing,
        'action' => route('listings.update', $listing)
    ])

</div>





@endsection
