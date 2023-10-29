@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{$listing->listing_title}}</h2>
        </div>
        <div class="card-content">

            <p>{{$listing->listing_description}}</p>

        </div>


        <div class="card-footer">
            <div class="card-left">
                {{$listing->listing_date}}
            </div>
            <div class="card-right">
                {{$listing->listing_expiry_date}}
            </div>
        </div>
    </div>
@endsection