<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::create([
            'nama'=>'Administrator',
            'username'=>'admin',
            'role'=>'admin',
            'password'=> bcrypt('password'),
    ]);

        \App\Models\User::create([
             'nama' => 'Petugas',
             'username' => 'petugas',
             'role' => 'petugas',
             'password'=> bcrypt('password'),
        ]);
    }
}

        \App\Models\Pelanggan::create([
            'nama'=>'Dodo Sidodo',
            'alamat'=>'Padaherang',
            'nomor_tlp'=>'082288877766'
        ]);

        \App\Models\Pelanggan::create([
            'nama'=>'Hanifah',
            'alamat'=>'Kalipucang',
            'nomor_tlp'=>'082288866677'
        ]);