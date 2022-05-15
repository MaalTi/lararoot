<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => [
                'en' => 'Articles',
                'es' => 'Artículos',
                'fr' => 'Articles',
            ],
        ]);
        Category::create([
            'name' => [
                'en' => 'Products',
                'es' => 'Productos',
                'fr' => 'Produits',
            ],
        ]);
        Category::create([
            'name' => [
                'en' => 'Uncategorized Articles',
                'es' => 'Artículos sin categoría',
                'fr' => 'Articles non classés',
            ],
            'parent_id' => 1
        ]);
        Category::create([
            'name' => [
                'en' => 'Uncategorized Products',
                'es' => 'Productos sin categoría',
                'fr' => 'Produits non classés',
            ],
            'parent_id' => 2
        ]);
    }
}
