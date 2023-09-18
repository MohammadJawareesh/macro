<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     User::create(['name'=>'admin','password'=>Hash::make('@>udpuK9_>ko'),'email'=>'admin@admin.com','email_verified_at'=>Carbon::now()])->assignRole('admin');

    }
}
