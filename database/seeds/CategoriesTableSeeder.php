<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 1)->create()->each(function ($p) {
            $num_originals = 9;
            $original_files_folder = 'public/originals/';
            // randomly select an image
            $pathToFile = $original_files_folder . random_int(1, $num_originals) . '.jpg';
            // add it to the product through the media library
            $p->addMedia($pathToFile)->preservingOriginal()->toMediaCollection('category');
        });
    }
}
