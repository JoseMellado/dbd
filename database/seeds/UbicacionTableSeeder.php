<?php

use Illuminate\Database\Seeder;

class UbicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ubicacions')->insert([
          'ciudad' => 'Hong Kong',
          'pais' => 'China',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Bangkok',
          'pais' => 'Tailandia',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Londres',
          'pais' => 'Reino Unido',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Singapur',
          'pais' => 'Singapur',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Macao',
          'pais' => 'Macao',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Paris',
          'pais' => 'Francia',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Dubai',
          'pais' => 'Emiratos Arabes Unidos',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Nueva York',
          'pais' => 'Estados Unidos',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Kuala Lumpur',
          'pais' => 'Malasia',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Shenzhen',
          'pais' => 'China',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Santiago',
          'pais' => 'Chile',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Antofagasta',
          'pais' => 'Chile',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Miami',
          'pais' => 'Estados Unidos',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Cancun',
          'pais' => 'Mexico',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Punta Cana',
          'pais' => 'Republica Dominicana',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Camboriu',
          'pais' => 'Brasil',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Rio de Janeiro',
          'pais' => 'Brasil',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Lima',
          'pais' => 'Peru',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Puerto Varas',
          'pais' => 'Chile',
          'created_at' => now(),
          'updated_at' => null,
      ]);

      DB::table('ubicacions')->insert([
          'ciudad' => 'Concepcion',
          'pais' => 'Chile',
          'created_at' => now(),
          'updated_at' => null,
      ]);
    }
}
