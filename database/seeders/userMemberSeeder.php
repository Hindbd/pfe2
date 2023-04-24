<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=new User;
        $user->id=1;
        $user->prenom='Admin';
        $user->name='Admin';
        $user->email='Admin@gmail.com';
        $user->role='admin';
        $user->password='admin2023';
    }
}
