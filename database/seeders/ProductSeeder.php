<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Embrace Sideboard',
            'subtitle' => 'Teixeira Design Studio',
            'price' => 71.56,
            'description' => 'When it’s colder than the far side of the moon and spitting rain too, you’ve still got to look good. From water-repellent leather to a rugged outsole, the Lunar Force 1 adapts AF-1 style, so you can keep your flame burning when the weather hits. Metal lace hardware and extended tongue bring mountain boot toughness, while the star-studded toe design gives your look the edge.',
            'image' => json_encode(['img/pic1.png', 'img/pic2.png', 'img/pic3.png', 'img/pic4.png']),
            'benefits' => json_encode([
                'Durable leather is easily cleanable so you can keep your look fresh.',
                'Water-repellent finish and internal membrane help keep your feet dry.',
                'Toe piece with star pattern adds durability.',
                'Synthetic insulation helps keep you warm.',
                'Originally designed for performance hoops, the Air unit delivers lightweight cushioning.',
                'Plush tongue wraps over the ankle to help keep out the moisture and cold.',
                'Rubber outsole with aggressive traction pattern adds durable grip.',
            ]),
            'details' => json_encode([
                'Not intended for use as Personal Protective Equipment (PPE).',
                'Water-repellent finish and internal membrane help keep your feet dry.'
            ]),
            'more_details' => json_encode([
                'Lunarlon midsole delivers ultra-plush responsiveness',
                'Encapsulated Air-Sole heel unit for lightweight sofaing',
                'Colour Shown: Ale Brown/Black/Goldtone/Ale Brown',
                'Style: 805899-202',
            ]),
        ]);
    }
}
