<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 200,
            'price' => 350,
            'barcode' => '15876364000',
            'stock'=> 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'RUNNING NIKE',
            'cost' => 600,
            'price' => 1550,
            'barcode' => '88976368960',
            'stock'=> 10,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'PC GAMER',
            'cost' => 900,
            'price' => 11150,
            'barcode' => '15446368960',
            'stock'=> 100,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'curso.png'
        ]);

        Product::create([
            'name' => 'IPHONE 11',
            'cost' => 500,
            'price' => 1550,
            'barcode' => '15876368960',
            'stock'=> 100,
            'alerts' => 10,
            'category_id' => 3,
            'image' => 'curso.png'
        ]);
    }
}
