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
              'image' => 'uploads/images/undraw_social_dashboard_k3pt.svg'
            ],
            ['name' => 'Дизајн',
            'label' => 'design',
            'description' => $faker->sentence,
            'image' => 'uploads/images/undraw_design_community_rcft.svg'
            ],
            ['name' => 'UX/UI',
            'label' => 'ux_ui',
            'description' => $faker->sentence,
            'image' => 'uploads/images/undraw_user_flow_vr6w.svg'
            ],
            ['name' => 'Data Science',
            'label' => 'data_science',
            'description' => $faker->sentence,
            'image' => 'uploads/images/undraw_Memory_storage_reh0.svg'
            ],
            ['name' => 'Програмирање',
            'label' => 'programing',
            'description' => $faker->sentence,
            'image' => 'uploads/images/undraw_pair_programming_njlp.svg'
            ],
            ['name' => 'Бизнис',
            'label' => 'business',
            'description' => $faker->sentence,
            'image' => 'uploads/images/undraw_team_work_k80m.svg'
            ],
        ]);


    }
}
