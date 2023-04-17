<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $table = "listings";

    protected $fillable = ['listing_title', 'listing_description', 'listing_expiry_date', 'listing_date'];
}
