<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class especialidad extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array([
            'nombre'=> 'Generales',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'Odontologos',
            'created_at'=>Carbon::now()
        ],[
            'nombre'=> 'Pediatras',
            'created_at'=>Carbon::now()
        ]);

        DB::table('especialidad')->insert($data);
    }
}
