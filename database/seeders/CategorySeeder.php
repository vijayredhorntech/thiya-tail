<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Farm Fresh Elite Produce',
                'image' => 'https://barmaler.sirv.com/thiya/category_1.jpg',
            ],
            [
                'name' => 'Gourmet by Self Help Groups',
                'image' => 'https://barmaler.sirv.com/thiya/category_2.jpg',
            ],
            [
                'name' => 'Traditional Grains & Legumes',
                'image' => 'https://barmaler.sirv.com/thiya/category_3.jpg',
            ],
            [
                'name' => 'Assorted Nuts and Seeds Mixes',
                'image' => 'https://barmaler.sirv.com/thiya/category_4.jpg',
            ],
            [
                'name' => 'Natural Himalayan Honey',
                'image' => 'https://barmaler.sirv.com/thiya/category_5.jpg',
            ],
            [
                'name' => 'Herbal Himalayan Healers',
                'image' => 'https://barmaler.sirv.com/thiya/category_6.jpg',
            ],
            [
                'name' => 'Wellness Means Health Worthy',
                'image' => 'https://barmaler.sirv.com/thiya/category_7.jpg',
            ],
            [
                'name' => 'Elixir Exquisite Finds',
                'image' => 'https://barmaler.sirv.com/thiya/category_8.jpg',
            ],

        ];

        foreach ($categories as $category) {
            $fileName = Str::random(10) . '.png';
            Storage::put('public/categoryImages/' . $fileName, file_get_contents($category['image']));
            Category::create([
                'name' => $category['name'],
                'image' => Storage::url('categoryImages/' . $fileName),
            ]);
        }
    }
}
