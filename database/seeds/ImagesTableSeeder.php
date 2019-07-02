<?php

use TPHST\Image;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // Cleanup old seed files
        Storage::disk('public')->deleteDirectory('images');
        Storage::disk('public')->makeDirectory('images');
        $images = [
            ['name' => 'About Background', 'width' => 1920, 'height' => 500],
            ['name' => 'Blog Background', 'width' => 1920, 'height' => 500],
            ['name' => 'About Image', 'width' => 1920, 'height' => 500],
            ['name' => 'About Frame', 'width' => 1920, 'height' => 500],
            ['name' => 'Stats Background', 'width' => 1920, 'height' => 900],
            ['name' => 'Testimonies Background', 'width' => 1920, 'height' => 500],
            ['name' => 'Slider 1', 'width' => 1920, 'height' => 780],
            ['name' => 'Slider 2', 'width' => 1920, 'height' => 780],
            ['name' => 'Slider 3', 'width' => 1920, 'height' => 780],
        ];
        foreach ($images as $image) {
            Image::create([
                'name' => $image['name'],
                'path' => 'images/' . $faker->unique()->image(
                    $dir = storage_path('app/public/images'),
                    $width = $image['width'],
                    $height = $image['height'],
                    $category = 'city',
                    $fullPath = false
                ),
            ]);
        }
    }
}
