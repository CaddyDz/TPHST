<?php

use Illuminate\Database\Seeder;
use TPHST\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'key' => 'phone_number',
            'value' => '023919561',
        ]);
        Setting::create([
            'key' => 'info_email',
            'value' => 'info@sarltphst.com',
        ]);
        Setting::create([
            'key' => 'stats_background',
            'value' => '',
        ]);
        Setting::create([
            'key' => 'stats_projects_finished',
            'value' => '32',
        ]);
        Setting::create([
            'key' => 'stats_projects_running',
            'value' => '5',
        ]);
        Setting::create([
            'key' => 'stats_employees',
            'value' => '65',
        ]);
    }
}
