<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Core\Number;
use Ramsey\Uuid\Uuid; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Facade;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create fake user
        User::factory()->count(20)->create();
    }
}
