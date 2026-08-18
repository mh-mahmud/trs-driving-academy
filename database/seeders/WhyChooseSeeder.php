<?php

namespace Database\Seeders;

use App\Models\WhyChooseItem;
use Illuminate\Database\Seeder;

class WhyChooseSeeder extends Seeder
{
    public function run(): void
    {
        if (WhyChooseItem::exists()) {
            return;
        }

        foreach ([
            ['Certificate', 'Award of recognition certificate to those who successfully complete the course.', 'icofont icofont-certificate'],
            ['Training Modules', 'Only PDTS follows international standard driving training and curriculum.', 'icofont icofont-man-in-glasses'],
            ['Experienced Trainer', 'Training provided under BRTA approved and experienced instructors.', 'icofont icofont-presentation'],
            ['Theory Class', 'Conducted in air-conditioned and modern multimedia classrooms.', 'icofont icofont-car'],
            ['Trainee Safety', 'International standard books and teaching materials for driving training.', 'icofont icofont-ebook'],
        ] as $order => [$title, $description, $icon]) {
            WhyChooseItem::create(compact('title', 'description') + [
                'icon_class' => $icon,
                'sort_order' => $order,
                'is_active' => true,
            ]);
        }
    }
}
