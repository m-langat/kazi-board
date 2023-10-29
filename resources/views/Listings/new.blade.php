@extends('layout')

@section('content')

<h2 class="mt-4 mb-4"> New Listing</h2>


<div class="card mt-2">
    <div class="card-body">
        <h3>Add listing</h3>
        <form action="/listings" method="POST">
            @csrf
            <div class="mb-3">
                <label for="listing_title" class="form-label">Listing Title</label>
                <input class="form-control" type="text" name="listing_title">
            </div>
            <div class="mb-3">
                <label for="listing_description" class="form-label">Listing Description</label>
                <textarea class="form-control" name="listing_description" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="mb-3">
                <label for="listing_expiry_date" class="form-label">Listing Expiry Date</label>
                <input class="form-control" type="date" name="listing_expiry_date" id="">
            </div>
            <div class="mb-3">
                <label for="listing_date" class="form-label">Listing Date</label>
                <input class="form-control" type="date" name="listing_date" id="">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-success" value="submit">
            </div>
        </form>
    </div>
    
</div>



@endsection