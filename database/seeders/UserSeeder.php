<?php

namespace Database\Seeders;

use App\Models\cidepartamento;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*  User::create([
            'name' => 'Aaron Fabricio',
            'primer_ap' => 'Santa Cruz',
            'Segundo_ap' => 'Valdez',
            'ci' => 9929114,
            'cidepartamento_id' => 1,
            'fecha_nacimiento' => '1997-05-11',
            'telefono' => 70668135,
            'genero_id' => 1,
            'direccion' => 'calle willkatuti rio seco 1364',
            'email' => "aaronfabricio00@gmail.com",
            'password' => bcrypt('12345678')



        ]); */

        User::factory(70)->create();
    }
}
