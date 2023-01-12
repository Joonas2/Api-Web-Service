<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Product::factory()->count('50')->create();
    }
}


/**Para rodar: php artisan db:seed ou php artisan db:seed --class='NomeDaSee  */