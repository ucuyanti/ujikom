<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $user = [
        'name' => 'ucu',
        'email' => 'churly@gmail.com',
        'password' => bcrypt('churly12'), 
        'kategori_id' => 1,
    ];

    User::insert($user);
}

}