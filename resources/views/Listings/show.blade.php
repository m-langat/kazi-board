@extends('layout')

@section('content')
    <style>
        .ql-container.ql-snow{ border: none !important; padding: 0 !important; margin: 0 !important;}
    </style>
    <h1 class="mt-4 mb-4">Listing Details</h1>
    <div class="card mt-2">
        
        <div class="card-body">
            <h2 mb>{{$listing->listing_title}}</h2>
            <div id="listing_details">
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