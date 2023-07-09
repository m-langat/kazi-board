@extends('index')

@section('content')
<h2>New Listing</h2>
<form action="/listings" method="POST">
    @csrf
    <div>
        <label for="listing_title">Listing Title</label>
        <input type="text" name="listing_title">
    </div>
    <div>
        <label for="listing_description">Listing Description</label>
        <textarea name="listing_description" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="listing_expiry_date">Listing Expiry Date</label>
        <input type="date" name="listing_expiry_date" id="">
    </div>
    <div>
        <label for="listing_date">Listing Date</label>
        <input type="date" name="listing_date" id="">
    </div>
    <div>
        <input type="submit" value="submit">
    </div>
</form>


@endsection