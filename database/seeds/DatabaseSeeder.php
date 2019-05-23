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
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }
}
