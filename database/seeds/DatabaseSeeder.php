<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call( (new UserSeeder()) ->run() );

        $this->call( (new PostSeeder()) ->run() );

        $this->call( ( new SkillSeeder()) ->run() );

        
    }
}
