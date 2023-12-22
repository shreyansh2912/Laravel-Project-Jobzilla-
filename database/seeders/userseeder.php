<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Nette\Utils\Strings;
use Illuminate\Support\Str;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // 'id' => '40',
            'name' => Str::random(10),
            'username' => Str::random(8),
            'email' => Str::random(8).'@gmail.com',
            'password' => Hash::make('password'),

        ]);
    }
}
