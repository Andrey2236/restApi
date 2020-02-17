<?php

use Illuminate\Database\Seeder;
use App\Reviews;


class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Reviews::create(array(
                'users_id' =>'1',
                'description' => '1',
                'rating' => '1',
            ));

    }
}
