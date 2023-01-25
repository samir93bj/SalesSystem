<?php

namespace Database\Seeders;

use App\Models\Denomination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DenominationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Denomination::create([
            'type' => 'BILLETE',
            'value' => 1000,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => 500,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => 200,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);

        Denomination::create([
            'type' => 'BILLETE',
            'value' => 100,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);

        Denomination::create([
            'type' => 'MONEDA',
            'value' => 10,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);

        Denomination::create([
            'type' => 'MONEDA',
            'value' => 5,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);

        Denomination::create([
            'type' => 'OTRO',
            'value' => 0,
            'image' => 'https://dummyimage.com/200x150/5c5756/fff'
        ]);
    }
}
