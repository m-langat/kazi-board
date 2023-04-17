<?php

namespace Database\Factories;

use App\Models\Listing;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{

    protected $model = Listing::class;
    /**
     * Define the model's default state.
     *  
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'listing_title' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'listing_description' => fake()->paragraph(),
            'listing_expiry_date'=> Carbon::now()->addDays(30)->toDateString(),
            'listing_date' => Carbon::now()->toDateString(),
        ];
    }
}
