<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nombre' => 'Docente',
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Director',
        ]);
        DB::table('roles')->insert([
            'nombre' => 'Delegado',
        ]);
    }
}
