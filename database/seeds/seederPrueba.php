<?php

use Illuminate\Database\Seeder;

class seederPrueba extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('genres')->insert([
        [
          'name' => 'Género 1',
          'ranking' => 33,
          'active' => 1
        ],
        [
          'name' => 'Género 2',
          'ranking' => 34,
          'active' => 0
        ]
      ]);
    }
}
