<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Warlyn',
            'email' => 'warlyn@prometheus.com',
        ]);
        $user->assignRole(RoleEnum::admin->value);
    }
}
