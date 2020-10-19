<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\preguntas::truncate();//vacia la tabla depreguntas 
        DB::unprepared(file_get_contents('database/Preguntas_soloInserts.sql'));
    }
}
