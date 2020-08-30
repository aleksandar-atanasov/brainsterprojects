<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('categories')->insert([
            ['name' => 'Маркетинг',
                'label' => 'marketing',
              'description' => $faker->sentence,
              'image' => $faker->image('public/img',400,400, null, false)
            ],
            ['name' => 'Дизајн',
            'label' => 'design',
            'description' => $faker->sentence,
            'image' => $faker->image('public/img',400,400, null, false)
            ],
            ['name' => 'UX/UI',
            'label' => 'ux_ui',
            'description' => $faker->sentence,
            'image' => $faker->image('public/img',400,400, null, false)
            ],
            ['name' => 'Data Science',
            'label' => 'data_science',
            'description' => $faker->sentence,
            'image' => $faker->image('public/img',400,400, null, false)
            ],
            ['name' => 'Програмирање',
            'label' => 'programing',
            'description' => $faker->sentence,
            'image' => $faker->image('public/img',400,400, null, false)
            ],
            ['name' => 'Бизнис',
            'label' => 'business',
            'description' => $faker->sentence,
            'image' => $faker->image('public/img',400,400, null, false)
            ],
        ]);


    }
}
