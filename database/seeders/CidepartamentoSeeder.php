<?php

namespace Database\Seeders;

use App\Models\cidepartamento;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CidepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $nlapaz = 'La Paz';
        $noruo = 'Oruro';
        $nsanta = 'Santa Cruz';
        $npotosi = 'Potosi';
        $ntarija = 'Tarija';
        $nchuqui = 'Chuquisaca';
        $nbeni = 'Beni';
        $npando = 'Pando';
        $ncocha = 'Cochabamba';


        $lapaz = new cidepartamento();
        $lapaz->nombre = $nlapaz;
        $lapaz->slug = Str::slug($nlapaz, '-');
        $lapaz->extension = 'LP';
        $lapaz->save();

        $oruro = new cidepartamento();
        $oruro->nombre = $noruo;
        $oruro->slug = Str::slug($noruo, '-');
        $oruro->extension = 'OR';
        $oruro->save();

        $cochabamba = new cidepartamento();
        $cochabamba->nombre = $ncocha;
        $cochabamba->slug = Str::slug($ncocha, '-');

        $cochabamba->extension = 'CB';

        $cochabamba->save();

        $tarija = new cidepartamento();
        $tarija->nombre = $ntarija;
        $tarija->slug = Str::slug($ntarija, '-');

        $tarija->extension = 'TJ';

        $tarija->save();

        $santacruz = new cidepartamento();
        $santacruz->nombre = $nsanta;
        $santacruz->slug = Str::slug($nsanta, '-');

        $santacruz->extension = 'SC';

        $santacruz->save();

        $sucre = new cidepartamento();
        $sucre->nombre = $nchuqui;
        $sucre->slug = Str::slug($nchuqui, '-');

        $sucre->extension = "CH";
        $sucre->save();

        $potosi = new cidepartamento();
        $potosi->nombre = $npotosi;
        $potosi->slug = Str::slug($npotosi, '-');

        $potosi->extension = "PT";
        $potosi->save();

        $beni = new cidepartamento();
        $beni->nombre = $nbeni;
        $beni->slug = Str::slug($nbeni, '-');

        $beni->extension = "BN";
        $beni->save();

        $pando = new cidepartamento();
        $pando->nombre = $npando;
        $pando->slug = Str::slug($npando, '-');

        $pando->extension = "PD";
        $pando->save();
    }
}
