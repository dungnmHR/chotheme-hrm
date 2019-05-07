<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item1 = Item::create([
            'name' => 'Theme 1', 
            'image_small' => 'preview.png',
            'image_big' => 'preview.png',
            'content_full' => 'Giao diện do công ty HRM xây dựng và phát triển',
            'content_des' => 'Giao diện của HRM',
            'link' => '',
            'link_demo' => '',
            'file_size' => '14M',
            'type' => 'zip',      
            'price' => '8.9',
            'saleoff' => '8.9',
            'cartegory' => 'shop',
            'user_id' => '1',
            'status' => '1',
        ]);

        $item2 = Item::create([
            'name' => 'Theme 2', 
            'image_small' => 'preview.png',
            'image_big' => 'preview.png',
            'content_full' => 'Giao diện do công ty HRM xây dựng và phát triển',
            'content_des' => 'Giao diện của HRM',
            'link' => '',
            'link_demo' => '',
            'file_size' => '15M',
            'type' => 'zip', 
            'price' => '10',
            'saleoff' => '10',
            'cartegory' => 'family',
            'user_id' => '2',
            'status' => '1',
        ]);
        
        $item3 = Item::create([
            'name' => 'Theme 3', 
            'image_small' => 'preview.png',
            'image_big' => 'preview.png',
            'content_full' => 'Giao diện do công ty HRM xây dựng và phát triển',
            'content_des' => 'Giao diện của HRM',
            'link' => '',
            'link_demo' => '',
            'file_size' => '10M',
            'type' => 'zip', 
            'price' => '18.9',
            'saleoff' => '18.9',
            'cartegory' => 'shop',
            'user_id' => '2',
            'status' => '0',
        ]);

        $item4 = Item::create([
            'name' => 'Theme 3', 
            'image_small' => 'preview.png',
            'image_big' => 'preview.png',
            'content_full' => 'Giao diện do công ty HRM xây dựng và phát triển',
            'content_des' => 'Giao diện của HRM',
            'link' => '',
            'link_demo' => '',
            'file_size' => '',
            'type' => 'zip', 
            'price' => '8.9',
            'saleoff' => '8.9',
            'cartegory' => 'shop',
            'user_id' => '2',
            'status' => '1',
        ]);
    }
}
