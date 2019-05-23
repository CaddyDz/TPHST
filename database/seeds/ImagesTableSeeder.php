<?php

use Illuminate\Database\Seeder;
use TPHST\Image;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'name' => 'About Background'
        ]);
        Image::create([
            'name' => 'About Image'
        ]);
        Image::create([
            'name' => 'About Frame'
        ]);
        Image::create([
            'name' => 'About Background'
        ]);
        Image::create([
            'name' => 'Stats Background'
        ]);
    }
}
