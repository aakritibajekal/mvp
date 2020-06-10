<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UserSeeder extends Seeder
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

        foreach( range(1, 50) as $index ) 
        {
            $role = "jobFinder"; 
            if( rand(0, 1) == 1) $role = "jobPoster";

            DB::table( 'users' )->insert( array(
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password,
                'city' => $faker->city,
                'companyName' => $faker->company,
                'created_at' => date( "Y-m-d H:i:s" ),
                'role' => $role,
            ));
        }
    }
}
