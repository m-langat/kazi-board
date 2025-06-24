<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listings = Listing::all();

        return view("Listings.index", compact("listings"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Listings.new");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newListing = new Listing();
        $newListing->listing_title = $request['listing_title'];
        $newListing->listing_description = $request['listing_description'];
        $newListing->listing_expiry_date = $request['listing_expiry_date'];
        $newListing->listing_date = $request['listing_date'];
        $newListing->save();

        return redirect("/listings");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view("Listings.show", compact("listing"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::findOrFail($id);
        return view("Listings.edit", compact("listing"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $listing = Listing::findOrFail($id);
        $listing->listing_title = $request['listing_title'];
        $listing->listing_description = $request['listing_description'];
        $listing->listing_expiry_date = $request['listing_expiry_date'];
        $listing->listing_date = $request['listing_date'];
        $listing->save();

        return redirect("/listings");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
