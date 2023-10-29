@extends('layout')
@section('content')


<div class="row justify-content-between align-items-center mt-4 mb-2">
    
        <div class="col-8">
            <h1>Job Listings</h1>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <div>
                <a class="btn btn-success btn-sm" href="/listings/new">Add listing</a>
            </div>
        </div>

    
</div>



<div class="listings">

    @foreach ($listings as $listing)
    <div class="listing">
        <a href="listings/{{$listing->id}}">
            <div class="card">
                <div class="card-body">
                    {{$listing->listing_title}}
                </div>
                <div class="card-footer text-body-secondary">
                    Listed: {{$listing->listing_date}}   |   Expiring: {{$listing->listing_expiry_date}}
                </div>
            </div>
        </a>
    </div>

        
    @endforeach    
</div>
@endsection