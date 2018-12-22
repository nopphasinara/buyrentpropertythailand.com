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
        // $this->call(UsersTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(TypesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(AgentCitiesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        // $this->call(PostsTableSeeder::class);
    }
}
