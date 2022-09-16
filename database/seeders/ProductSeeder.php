<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $products = [
            'Mesa',
            'Silla',
            'Mueble',
            'Cama',
            'Escritorio',
            'Estante',
            'Archivador',
            'Lampara',
            'Puerta',
            'Pizarron'
        ];

        foreach($products as $product){
            Product::create([
                "title" => $product,
                "price" => number_format(rand(1, 999) / rand(1, 5), 2)
            ]);
        }
    }
}
