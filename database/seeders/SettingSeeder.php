<?php

namespace Database\Seeders;

use App\Models\dashboard\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            [
                'email'=>'test@test.com'
            ],[
                'name'=>'Livewire',
                'email'=>'test@test.com',
                'phone'=>'11111111',
                'address'=>'Cairo',
                'facebook'=>'https://facebook.com',
                'twitter'=>'https://twitter.com',
                'instagram'=>'https://instagram.com',
                'linkedin'=>'https://linkedin.com'
            ]
        );
    }
}
