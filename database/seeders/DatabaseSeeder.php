<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SuperAdminSeeder::class);
        $this->call(SiteSettingSeeder::class);
        $this->call(CourseManagementSeeder::class);
        $this->call(BlogCategorySeeder::class);
        $this->call(CertificationSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(WhyChooseSeeder::class);
        $this->call(AchievementStatSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(AboutPageSeeder::class);
        $this->call(ContactPageSeeder::class);
    }
}
