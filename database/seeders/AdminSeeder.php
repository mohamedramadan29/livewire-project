<?php

namespace Database\Seeders;

use App\Models\dashboard\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate([
            'email' => 'admin@admin.com',
        ], [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('11111111'),
        ]);
    }
}
