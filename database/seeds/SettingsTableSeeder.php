<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'=>'School',
            'contact_number'=>'+977-01-4255173',
            'contact_email'=>'school@gmail.com',
            'address'=>'Kantipath, Kathmandu , Nepal',
            'facebook'=>'www.youtube.com',
            'twitter'=>'www.youtube.com',
            'linkedin'=>'www.youtube.com',
            'google'=>'www.youtube.com',
            'youtube'=>'www.youtube.com',
        ]);
    }
}
