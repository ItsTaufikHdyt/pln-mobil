<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'id' => 1,
            'nama' => 'admin',
        ]);
        DB::table('role')->insert([
            'id' => 2,
            'nama' => 'user',
        ]);
        DB::table('atasan')->insert([
            'id' => 1,
            'nip' => '4912491841',
            'nama' => 'taufik',
        ]);
        DB::table('users')->insert([
            'nip' => '123456789',
            'nama' => 'taufik',
            'jabatan' => 'programmer',
            'bagian' => 'TI',
            'password' => bcrypt('admin123'),
            'role_id' => 1,
            'atasan_id' => 1
        ]);
        DB::table('users')->insert([
            'nip' => '987654321',
            'nama' => 'taufik',
            'jabatan' => 'programmer',
            'bagian' => 'TI',
            'password' => bcrypt('user123'),
            'role_id' => 2,
            'atasan_id' => 1
        ]);
    }
}
