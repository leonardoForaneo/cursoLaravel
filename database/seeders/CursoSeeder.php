<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Registros que se van a guardar
        /*$curso = new Curso();
        $curso->name = 'Laravel';
        $curso->description = 'El mejor framework de php';
        $curso->category = 'Desarrollo Web';

        $curso->save();

        $curso2 = new Curso();
        $curso2->name = 'Laravel';
        $curso2->description = 'El mejor framework de php';
        $curso2->category = 'Desarrollo Web';

        $curso2->save();

        $curso3 = new Curso();
        $curso3->name = 'Laravel';
        $curso3->description = 'El mejor framework de php';
        $curso3->category = 'Desarrollo Web';

        $curso3->save();*/

        //Aquí le asignamos cuantos registros queremos, una vez que se especifico el comportamiento en el factory
        Curso::factory(50)->create();
    }
}
