<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        //Esto es para mandar llamar al seeder
        //$this->call(CursoSeeder::class);

        //Como es una sola linea de codifo para ejecutar el factory lo hacemos aquí y no en un seeder
        Curso::factory(50)->create();
    }
}
