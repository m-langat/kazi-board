@extends('layout')

@section('content')
    <style>
        .ql-container.ql-snow{ border: none !important; padding: 0 !important; margin: 0 !important;}
    </style>
    <div class="row justify-content-between align-items-center mt-4 mb-2">
    
        <div class="col-8">
            <h1>Show Listing</h1>
        </div>
        <div class="col-4 d-flex justify-content-end">
            <div>
                <a class="btn btn-success btn-sm" href="/listings/{{$listing->id}}/edit">Edit listing</a>
            </div>
        </div>

    
</div>
    <div class="card mt-2">

        <div class="card-body">
            <h2 mb>{{$listing->listing_title}}</h2>
            <div id="listing_details">
                {{$listing->listing_description}}
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-6">
                    <div class="">
                        Listing Date: {{$listing->listing_date}}
                    </div>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class="card-right">
                        Expiry Date: {{$listing->listing_expiry_date}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            var listing = {{Js::from($listing->listing_description)}};
            var quill = new Quill('#listing_details', {
            readOnly: true,
            theme: 'snow',
            "modules": {
                "toolbar": false
                }
            });

            quill.setContents(JSON.parse(listing));
    </script>
@endsection
