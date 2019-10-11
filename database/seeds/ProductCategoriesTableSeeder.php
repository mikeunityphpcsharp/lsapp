<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];
        $cName = 'Без категории';
        $categories[] = [
            'title' => $cName,
            'slug' => Str::slug($cName, '_'),
            'parent_id' => 0,
        ];

        for($i = 0; $i<=10; $i++)
        {
            $cName = 'Котегория #'.$i;
            $parent_id = ($i > 4) ? rand(1, 4) : 1;

            $categories[] = [
                'title' => $cName,
                'slug' => Str::slug($cName, '_'),
                'parent_id' => $parent_id,
            ];
        }

        \DB::table('product_categories')->insert($categories);
    }
}
