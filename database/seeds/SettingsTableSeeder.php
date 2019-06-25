<?php

use TPHST\Setting;
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
        $settings = [
            'title' => 'SARL TPHST FRERES KHENICHE',
            'phone_number' => '023919561',
            'info_email' => 'info@sarltphst.com',
            'stats_projects_finished' => '32',
            'stats_projects_running' => '5',
            'stats_employees' => '65',
            'address' => 'Cité Belaouadi 9300 Larbaa Blida',
            'schedule' => 'Dim-Jeu : 8am - 4pm',
            'instagram' => 'https://www.instagram.com/tphstsarl/',
            'facebook' => 'https://www.facebook.com/sarltphst',
        ];
        foreach ($settings as $key => $value) {
            Setting::create([
                'key' => $key,
                'value' => $value,
            ]);
        }
    }
}
