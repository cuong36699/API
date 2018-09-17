<?php

use Illuminate\Database\Seeder;
use App\Model\Review;
use App\Model\Product;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Review::truncate();
    	Product::all()->each(function ($product)
    	{
    		$product->reviews()->saveMany(factory(Review::class, 6)->make());
    	});
    }
}
