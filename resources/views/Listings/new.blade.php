@extends('index')

@section('content')
<form action="/listing">
    <input type="text" name="listing_title">
    <textarea name="listings_description" id="" cols="30" rows="10"></textarea>
    <input type="date" name="listing_expiry_date" id="">
    <input type="date" name="listing_date" id="">
    <input type="submit" value="submit">
</form>


@endsection