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
        $names = [
            'About Background',
            'About Image',
            'About Frame',
            'Stats Background',
            'Testimonies Background',
            'Slider 1',
            'Slider 2',
            'Slider 3',
        ];
        foreach ($names as $name) {
            Image::create([
                'name' => $name
            ]);
        }
    }
}
