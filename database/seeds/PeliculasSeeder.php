<?php

use Illuminate\Database\Seeder;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Movie::class, 50)->create()->each(function ($u) {
           
       });
    }
}