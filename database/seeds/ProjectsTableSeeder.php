<?php

use Illuminate\Database\Seeder;
use TPHST\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Reconstruction d\'un ouvrage d\'art',
            'description' => 'Reconstruction d\'un ouvrage d\'art sur RN18 PK37+700',
            'location' => 'Ouled Dilmi',
        ]);
    }
}
