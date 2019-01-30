<?php

use Illuminate\Database\Seeder;
use App\Vuelo;
use App\Ubicacion;
class VueloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vuelo::class, 1000)->create();
    }
}
