<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Item;
use App\Models\ItemListname;
use App\Models\Listname;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {  //arreglo con todas la categorias de la base de datos
       $categories = ["Herramientas", "Pinturas", "Exterior"];

       foreach ($categories as $category){
         DB::table("categories")->insert([
            "name" => $category

        ]);
        Client::factory(10)->create();
        Item::factory(10)->create();

        Listname::factory(5)->create();
        ItemListname::factory(10)->create();


       }
    }

}
