<?php

namespace Database\Seeders;

use App\Models\NavigationItem;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = SiteSetting::firstOrCreate([], [
            'footer_about' => 'BRTA Registration No: 116/18. Established in 2018, Pathway Driving Training School provides modern training for safer roads.',
            'office_hours' => 'Opening Time: 7:00 AM to 10:00 PM',
            'office_days' => 'Saturday to Thursday',
            'office_note' => 'Friday - Maintenance Class: 4:00 PM, Theory Class: 5:00 PM',
            'address' => '48/3, BRTC Staff Quarter Market, Senpara Parbata, Kafrul, Dhaka - 1216',
            'email' => 'pathway.dts@gmail.com',
            'phone' => '+88 01321232982',
            'floating_phone' => '+8801321232982',
            'whatsapp_number' => '8801321232982',
            'facebook' => 'https://www.facebook.com/PathwayDrivingTrainingSchool',
            'linkedin' => 'https://www.linkedin.com/in/pathway-driving-training-school',
            'youtube' => 'https://www.youtube.com/channel/UCQnVdGR7hgb___3xC9aCEPg',
            'instagram' => 'https://www.instagram.com/pathwaydrivingtrainingschool',
            'registration_text' => 'Bangladesh Road Transport Authority Registered By 116/18',
            'copyright_text' => '© Pathway '.date('Y').' · All rights reserved.',
        ]);

        if (! $settings->floating_phone && ! $settings->whatsapp_number) {
            $settings->update([
                'floating_phone' => '+8801321232982',
                'whatsapp_number' => '8801321232982',
            ]);
        }
        if (! $settings->hero_title) $settings->update(['hero_subtitle'=>'Under experienced instructors','hero_title'=>'Welcome to PATHWAY Driving Training School','hero_description'=>'We ensure the planned training modules and the safety of the trainees','hero_primary_text'=>'Get Started','hero_primary_url'=>'/register','hero_secondary_text'=>'View Courses','hero_secondary_url'=>'/courses','hero_success_title'=>'5,000+ Success Stories','hero_success_text'=>'Join our growing community today','hero_badges'=>[['title'=>'BRTA Certified','text'=>'Professional Training Standards'],['title'=>'Safety First','text'=>'Dual Control Training Vehicles'],['title'=>'Flexible Slots','text'=>'Train at Your Convenience']],'hero_stats'=>[['value'=>'5952+','label'=>'GRADUATED FROM HERE'],['value'=>'4','label'=>'INSTRUCTORS NUMBER'],['value'=>'1380','label'=>'PRESENT STUDENTS'],['value'=>'1','label'=>'BRANCH']]]);
        if (! $settings->skills_title) $settings->update(['skills_title'=>'Master the skills to drive your career','skills_description'=>'Get certified, master modern tech skills, and level up your career whether you’re starting out or a seasoned pro. 95% of eLearning learners report our hands-on content directly helped their careers.','skills_button_text'=>'Browse Courses']);

        if (NavigationItem::doesntExist()) {
            foreach ([
                ['Home', '/', []],
                ['About', '/about', []],
                ['Enroll Now', '#', [['Offline Courses', '/courses'], ['Theory Courses', '/theory-courses'], ['Online Courses', '/online-courses']]],
                ['More', '#', [['Book', '/books'], ['Blogs', '/blogs'], ['Media', '/media'], ['Contact Us', '/contact']]],
                ['Corporate Training', '#', [['Corporate Driving', '/corporate']]],
            ] as $index => [$label, $url, $children]) {
                $parent = NavigationItem::create(['label' => $label, 'url' => $url, 'sort_order' => $index]);
                foreach ($children as $childIndex => [$childLabel, $childUrl]) {
                    NavigationItem::create(['parent_id' => $parent->id, 'label' => $childLabel, 'url' => $childUrl, 'sort_order' => $childIndex]);
                }
            }
        }
    }
}
