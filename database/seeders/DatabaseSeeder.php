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
        $role = [
            [
                'id' => 1,
                'nama' => 'admin',
            ],
            [
                'id' => 2,
                'nama' => 'user',
            ]
        ];
        $atasan = [
            [
                'id' => 1,
                'nip' => '7504026D',
                'nama' => 'Choirul Anwar',
            ],
            [
                'id' => 2,
                'nip' => '7594061J',
                'nama' => 'Sudarto',
            ],
            [
                'id' => 3,
                'nip' => '6891003D',
                'nama' => 'Sri Mulyowati',
            ]
        ];
        $user = [
            [
                'nip' => '123456789',
                'nama' => 'Junita Maulida',
                'jabatan' => 'programmer',
                'bagian' => 'TI',
                'password' => bcrypt('admin123'),
                'role_id' => 1,
                'atasan_id' => 1
            ],
            [
                'nip' => '987654321',
                'nama' => 'Taufik Hidayat',
                'jabatan' => 'Programmer',
                'bagian' => 'TI',
                'password' => bcrypt('user123'),
                'role_id' => 2,
                'atasan_id' => 1
            ],
            [
                'nip' => '6584140D',
                'nama' => 'Padillah Haji',
                'jabatan' => 'ENGINEER PENGELOLAAN KONSTRUKSI',
                'bagian' => 'JAR & KONS',
                'password' => bcrypt('user123'),
                'role_id' => 2,
                'atasan_id' => 1
            ]
            ];
        $jenis_kendaraan = [
            [
                'nama' => 'Avanza',
            ],
            [
                'nama' => 'Innova',
            ],
            [
                'nama' => 'Hilux Single Cabin',
            ],
            [
                'nama' => 'Isuzu NKR 55',
            ],
            [
                'nama' => 'Hilux Double Cabin',
            ],
        ];
        $unit = [
            [
                'nama' => 'ULP Gambut',
            ],
            [
                'nama' => 'ULP Marahaban'
            ],
            [
                'nama' => 'ULP Banjarbaru'
            ],
            [
                'nama' => 'ULP A. Yani'
            ],
        ];
        $supir = [
            [
                'nama' => 'Adit',
            ],
            [
                'nama' => 'Riyan',
            ],
            [
                'nama' => 'Aan',
            ],
        ];
        DB::table('role')->insert($role);
        DB::table('atasan')->insert($atasan);
        DB::table('users')->insert($user);
        DB::table('supir')->insert($supir);
        DB::table('unit')->insert($unit);
        DB::table('jenis_kendaraan')->insert($jenis_kendaraan);
    }
}
