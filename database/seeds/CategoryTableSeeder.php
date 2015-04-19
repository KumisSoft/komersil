<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $category = Category::create([
            'name' => 'Apple',
        ]);

//        dd($category->toArray());

        Category::create([
            'name' => 'Macbook Pro',
            'parent_id' => $category->id,
        ]);

        Category::create([
            'name' => 'Macbook Air',
            'parent_id' => $category->id,
        ]);

        Category::create([
            'name' => 'New Macbook',
            'parent_id' => $category->id,
        ]);

        Category::create([
            'name' => 'Alienware',
        ]);

        Category::create([
            'name' => 'ASuS',
        ]);

        Category::create([
            'name' => 'HP',
        ]);

        Category::create([
            'name' => 'Acer',
        ]);

        Category::create([
            'name' => 'Other',
            'weight' => 100,
        ]);
    }
}
