<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 5)->create()->each(function ($p) {
            $num_originals = 15;
            $original_files_folder = 'public/originals/';
            // randomly select an image
            $pathToFile = $original_files_folder . random_int(10, $num_originals) . '.jpg';
            // add it to the product through the media library
            $p->addMedia($pathToFile)->preservingOriginal()->toMediaCollection('profile');
        });
    }
}
