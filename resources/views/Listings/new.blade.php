@extends('layout')

@section('content')

<h2 class="mt-4 mb-4"> New Listing</h2>


<div class="card mt-2">
    <div class="card-body">
        <h3>Add listing</h3>
        <form action="/listings" method="POST" id="listing-form">
            @csrf
            <div class="mb-3">
                <label for="listing_title" class="form-label">Listing Title</label>
                <input class="form-control" type="text" name="listing_title">
            </div>
            <div class="mb-3">
                <label for="listing_description" class="form-label">Listing Description</label>
                <textarea hidden ="form-control" name="listing_description" id="listing_description" cols="30" rows="10"></textarea>
                <div id="editor-container">

                </div>
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

<script>
    var quill = new Quill('#editor-container', {
  modules: {
    toolbar: [
      ['bold', 'italic'],
      ['link', 'blockquote', 'code-block'],
      [{ list: 'ordered' }, { list: 'bullet' }]
    ]
  },
  placeholder: 'Write an epic listing description',
  theme: 'snow'
});

var form = document.querySelector('#listing-form');
form.onsubmit = function() {
  // Populate hidden form on submit
  var listingDescription = document.querySelector('#listing_description');
  listingDescription.value = JSON.stringify(quill.getContents());
  return false;
};

</script>


@endsection