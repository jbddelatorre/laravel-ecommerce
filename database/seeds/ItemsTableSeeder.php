<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create(['item_name' => 'Item1', 'description' => 'Description1', 'price' => 1111.11, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 1]);
        Item::create(['item_name' => 'Item2', 'description' => 'Description2', 'price' => 2222.22, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 2]);
        Item::create(['item_name' => 'Item3', 'description' => 'Description3', 'price' => 3333.33, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 3]);
        Item::create(['item_name' => 'Item4', 'description' => 'Description4', 'price' => 4444.44, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 4]);
        Item::create(['item_name' => 'Item5', 'description' => 'Description5', 'price' => 5555.55, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 5]);
        Item::create(['item_name' => 'Item6', 'description' => 'Description6', 'price' => 6666.66, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 1]);
        Item::create(['item_name' => 'Item7', 'description' => 'Description7', 'price' => 7777.77, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 2]);
        Item::create(['item_name' => 'Item8', 'description' => 'Description8', 'price' => 8888.88, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 3]);
        Item::create(['item_name' => 'Item9', 'description' => 'Description9', 'price' => 9999.99, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 4]);
        Item::create(['item_name' => 'Item10', 'description' => 'Description10', 'price' => 101010.10, 'image_path' => 'http://lorempixel.com/250/250', 'category_id' => 5]);
    }
}
