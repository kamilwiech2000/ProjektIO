<?php

namespace Database\Seeders;

use App\Models\Fishery;
use Illuminate\Database\Seeder;

class FisherySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fishery::upsert(
            [[
                'voivodeship' => 'Warmińsko-mazurskie',
                'fishery' => 'Soowalki',
                'fish_id' => '1',
                'creationdate' => '1976'
            ],
            [
                'voivodeship' => 'Podkarpackie',
                'fishery' => 'Płociaki',
                'fish_id' => '2',
                'creationdate' => '1988'
            ],
            [
                'voivodeship' => 'Śląskie',
                'fishery' => 'Krzemienna',
                'fish_id' => '3',
                'creationdate' => '2012'
            ],
            [
                'voivodeship' => 'Mazowieckie',
                'fishery' => 'Jaślisko',
                'fish_id' => '4',
                'creationdate' => '2003'
            ],],
            'voivodeship'

        );
    }
}
