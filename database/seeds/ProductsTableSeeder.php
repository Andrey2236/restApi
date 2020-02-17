<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Product::create(array(
                'categories_id'=>'1',
                'reviews_id'=>'1',
                'name' => '1',
                'short_description' => '1',
                'price' => '1888',
            ));
        }
}
