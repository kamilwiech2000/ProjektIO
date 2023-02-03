<?php

namespace Database\Seeders;

use App\Models\Fish;
use Illuminate\Database\Seeder;

class FishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Fish::upsert(
            [[
                'name' => 'Okoń',
                'weight' => '4.5 kg',
                'length' => '42 cm',
                'description' => 'niewielkich rozmiarów drapieżna ryba o krępym tułowiu silnie wygrzbieconym. Od grzbietu schodzą w dół ciemne pręgi. Podwójna płetwa grzbietowa, pierwsza rozciągnięta na ostro zakończonych kolcach.',
            ],

            [
                'name' => 'Karp',
                'weight' => '21 kg',
                'length' => '63.5 cm',
                'description' => 'Ciało wydłużone, wrzecionowate, prawie okrągłe w przekroju poprzecznym. Otwór gębowy dolny, mięsisty zaopatrzony w 2 pary wąsików. Łuski cykloidalne, duże, mocno osadzone w skórze. Grzbiet ciemny, zielonkawobrązowy, lub szarozielony, boki jaśniejsze, ciemnooliwkowe ze złotym połyskiem, brzuch żółtawo-lub kremowobiały.',

            ],

            [
                'name' => 'Sandacz ',
                'weight' => '10.5 kg',
                'length' => '98 cm',
                'description' => 'Jest drapieżnikiem, żyjącym w wolno płynących rzekach, jeziorach i europejskich akwenach portowych. Gatunek rodzimy dla wschodniej Europy, po wprowadzeniu zarybiania, sandacze występują także w niemal wszystkich wodach zachodniej Europy.',
            ],

            [
                'name' => 'Szczupak',
                'weight' => '12.7 kg',
                'length' => '73 cm',
                'description' => 'Drapieżna ryba słodkowodna z rodziny szczupakowatych. Ma ciało wydłużone. Płetwa odbytowa i grzbietowa znajduje się niedaleko ogona. Grzbiet ma oliwkowy kolor, spód biały lub żółtawy.',

            ],],
            'name'

         );
    }
}
