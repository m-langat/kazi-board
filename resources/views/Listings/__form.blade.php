<form action="{{ isset($listing) ? route('listings.update', $listing) : route('listings.store') }}" method="POST" id="listing-form">
    @csrf



    <div class="mb-3">
        <label for="listing_title" class="form-label">Title</label>
        <input type="text" name="listing_title" id="listing_title" class="form-control" value="{{ old('listing_title', $listing->listing_title) }}" required>
        @error('listing_title')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="listing_description" class="form-label">Description</label>
        <textarea hidden name="listing_description" id="listing_description" class="form-control" required>{{ old('listing_description', $listing->listing_description ) }}</textarea>
        <div id="editor-container">

        </div>
        @error('listing_description')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="listing_expiry_date" class="form-label">Expiry Date</label>
        <input type="date" name="listing_expiry_date" id="listing_expiry_date" class="form-control" value="{{ old('listing_expiry_date', $listing->listing_expiry_date) }}" required>
        @error('listing_expiry_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="listing_date" class="form-label">Listing Date</label>
        <input type="date" name="listing_date" id="listing_date" class="form-control" value="{{ old('listing_date', $listing->listing_date) }}" required>
        @error('listing_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <input type="submit" name="submit" value="{{ isset($listing) ? 'Update Listing' : 'Create Listing' }}" class="btn btn-primary"/>

</form>


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

    var listingDescription = document.querySelector('#listing_description');

    var defaultContent = listingDescription.value
   // console.log(defaultContent);
    if (defaultContent) {
    // If there's a default content, set it in the Quill editor
    quill.setContents(JSON.parse(defaultContent));
    }

    var form = document.querySelector('#listing-form');
    quill.on("text-change", () => {
    // Populate hidden form on submit
    var listingDescription = document.querySelector('#listing_description');
    listingDescription.value = JSON.stringify(quill.getContents());
    console.log(JSON.stringify(quill.getContents()));

    return false;
    });

</script>
