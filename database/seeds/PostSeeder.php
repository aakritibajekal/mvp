<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create();
    
        foreach( range(1, 40) as $index )
         {
            DB::table( 'posts' )->insert( array(
                'content' => $faker->paragraph,
                'user_id' => $faker->randomElement(User::pluck( 'id' )->toArray()), 
                'posted_at' => $faker->timestamp(),   
            ));
        }
    }
}
